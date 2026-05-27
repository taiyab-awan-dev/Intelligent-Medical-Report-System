<?php

namespace App;
use App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes;

    public $table = 'appointments';

    protected $dates = [
        
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'patient_id',
        'patient_contact',
        'patient_email',
        'patient_weight',
        'disease',
        'time',
        'date',
        'created_at',
        'updated_at',
        'deleted_at',
        'doctor_id',
        'status',
    ];

    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }


}