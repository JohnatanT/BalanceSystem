<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BalanceController extends Controller
{
    public function index()
    {
        //Retorna o balance do usuario logado
        $balance = auth()->user()->balance;
        //Verifica se há valor e retorna a coluna amount da tabela caso haja
        $amount =  $balance ? $balance->amount : 0;
        return view("admin.balance.index", compact('amount'));      
    }
}
