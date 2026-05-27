<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receptionist extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'receptionist_id', 'qualification',
    ];
}
