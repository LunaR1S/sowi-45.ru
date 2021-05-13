<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zayvka extends Model
{
    protected $fillable = [
        'fio','telephone', 'category', 'date', 'time'
    ];
}
