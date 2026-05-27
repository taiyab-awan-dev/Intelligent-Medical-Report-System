<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prescription extends Model
{
    use SoftDeletes;

    public $table = 'prescriptions';

    protected $dates = [
        
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'patient_id',
        'appointment_id',
        'time',
        'date',
        'created_at',
        'updated_at',
        'deleted_at',
        'doctor_id',
        'med_name',
        'med_type',
        'med_description',
        'med_dose',
    ];

    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }

    public function appointment()
    {
        return $this->belongsTo(User::class, 'appointment_id');
    }

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }
}
