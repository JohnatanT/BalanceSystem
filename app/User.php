<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Balance;
use App\Models\Historic;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Metodo que faz o relacionamento entre o usuario e o saldo
    public function balance()
    {
        //Faz o relacionamento 1 para 1 
        return $this->hasOne(Balance::class);
    }

    //Metodo que faz o relacionamento entre usuario e histórico
    public function historics()
    {
        //Relacionamento de 1 para Muitos
        return $this->hasMany(Historic::class);
    }


}
