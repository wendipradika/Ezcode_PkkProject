<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kasusGlobal extends Model
{
    protected $table = 'kasus_global';
    protected $fillable =['positif','diobati','meninggal'];
}
