<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    public $timestamps = false;

    //Metodo que irá depositar
    public function deposit(float $value) : Array
    {
        $this->amount += number_format($value, 2, '.', '');
        $deposit = $this->save();

        if($deposit)
            return [
                'sucess' => true,
                'message' => 'Sucesso ao recarregar'
            ];

        return [
            'sucess' => false,
            'message' => 'Erro ao recarregar'
        ];


    }



}
