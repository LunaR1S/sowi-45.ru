<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listzayvka extends Model
{
    protected $fillable = [
        'fio','telephone', 'category', 'date', 'time'
    ];
}
