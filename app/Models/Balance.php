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
                    'success' => true,
                    'message' => 'Sucesso ao recarregar'
                ];
        }else{
            DB::rollback();
                return [
                    'success' => false,
                    'message' => 'Erro ao recarregar'
                ];
        }
        


    }

    //Metodo que irá sacar
    public function withdrawn(float $value) : Array
    {
        //Verifica se há saldo suficiente para retirar
        if($this->amount < $value)
            return [
                'success' => false,
                'message' => 'Saldo Insuficiete'
            ];

        DB::beginTransaction();

        //Valor antes do saque
        $totalBefore = $this->amount ? $this->amount : 0;

        //Faz o saque
        $this->amount -= number_format($value, 2, '.', '');
        $retirada = $this->save();

        //Pega o usuario logado e cria um historico
        $historic = auth()->user()->historics()->create([
            'type'          => 'O',
            'amount'        => $value,
            'total_before'  => $totalBefore,
            'total_after'   => $this->amount,
            'date'          => date('Ymd'),
        ]);

        if($retirada && $historic){
            DB::commit();
                return [
                    'success' => true,
                    'message' => 'Sucesso ao sacar'
                ];
        }else{
            DB::rollback();
                return [
                    'success' => false,
                    'message' => 'Erro ao sacar'
                ];
        }
        


    }


}
