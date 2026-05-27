<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'staff_id', 'stafftype', 'specialization', 'pmdcNo', 'qualification', 'technology', 'timefrom', 'timeto'
    ];

    public function doctor()
    {
        return $this->belongsTo(User::class, 'staff_id');
    }
}
