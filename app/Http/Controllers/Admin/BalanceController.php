<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Balance;
use App\Http\Requests\MoneyValidationFormRequest;

class BalanceController extends Controller
{
    //Método que retorna a view de saldo com o amount da tabela
    public function index()
    {
        //Retorna o balance do usuario logado
        $balance = auth()->user()->balance;
        //Verifica se há valor e retorna a coluna amount da tabela caso haja
        $amount =  $balance ? $balance->amount : 0;
        return view("admin.balance.index", compact('amount'));      
    }

    //Metodo que retorna a view de deposito
    public function deposit()
    {
        return view('admin.balance.deposit');
    }

    //Metodo que passa o valor para a função depositar da Model Balance
    public function depositStore(MoneyValidationFormRequest $request)
    {
        $balance = auth()->user()->balance()->firstOrCreate([]);
        $response = $balance->deposit($request->value);

        if($response['success'])
            return redirect()
                        ->route('admin.balance')
                        ->with('success', $response['message']);
                        
        return redirect()
                    ->back()
                    ->with('error',$response['message']);

    }



}
