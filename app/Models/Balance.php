<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Balance extends Model
{
    public $timestamps = false;

    //Metodo que irá depositar
    public function deposit(float $value) : Array
    {

        DB::beginTransaction();

        //Valor antes do deposito
        $totalBefore = $this->amount ? $this->amount : 0;

        //Faz o deposito
        $this->amount += number_format($value, 2, '.', '');
        $deposit = $this->save();

        //Pega o usuario logado e cria um historico
        $historic = auth()->user()->historics()->create([
            'type'          => 'I',
            'amount'        => $value,
            'total_before'  => $totalBefore,
            'total_after'   => $this->amount,
            'date'          => date('Ymd'),
        ]);

        if($deposit && $historic){
            DB::commit();
                return [
                    'sucess' => true,
                    'message' => 'Sucesso ao recarregar'
                ];
        }else{
            DB::rollback();
                return [
                    'sucess' => false,
                    'message' => 'Erro ao recarregar'
                ];
        }
        


    }



}
