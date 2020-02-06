<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Musertest extends Model
{
    protected $table = 'usertest';
    protected $fillable = ['nama', 'usia', 'email', 'j_kel', 'dm', 'im', 'sm', 'cm', 'bm', 'dl', 'il', 'sl', 'cl', 'bl'];
}
