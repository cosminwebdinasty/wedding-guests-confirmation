<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table = 'guests';

    protected $fillable = [

        'participants',
        'name',
        'partner',
        'message',
        'status',
        'menu',
        'vac1',
        'vac2',
        'kids',
        'ages'
    ];
}
