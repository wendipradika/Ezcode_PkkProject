<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kasusIndonesia extends Model
{
    protected $table = 'kasus_indonesia';
    protected $fillable =['positif','diobati','meninggal'];
}
