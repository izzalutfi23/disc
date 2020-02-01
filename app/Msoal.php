<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Msoal extends Model
{
    protected $table = 'soal';
    protected $fillable = ['nomor', 'soal'];
}
