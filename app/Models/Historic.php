<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historic extends Model
{
    //Valores que a tabela irá receber
    protected $fillable = ['type','amount','total_before','total_after','user_id_transaction','date'];
}
