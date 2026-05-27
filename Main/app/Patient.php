<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'patient_id', 'symptoms', 'homeNo', 'marital_status' ,'emergency_contact' , 'Trusted_email' , 'postal_code', 'city',
        'mother_name', 'workNo', 'occupation' ,'industry', 'employer_city', 'employer_postal_code', 'language',
        'family_size', 'income', 'refferal_source', 'religion','migrant_or_seasonal', 'guardian_name',
        'guardian_address','guardian_contact','guardian_city','guardian_postal_code','guardian_workNo'
    ];

    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }
}
