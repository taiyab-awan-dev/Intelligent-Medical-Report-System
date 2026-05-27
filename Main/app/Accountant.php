<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accountant extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'accountant_id', 'qualification',
    ];
}
