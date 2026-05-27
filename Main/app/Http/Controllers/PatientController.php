<?php

namespace App\Http\Controllers;

use App\Patient;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Exception;

class PatientController extends Controller
{
    public function updatePatient(Request $request, $id)
    {
        
        try {
            $data = $request->input();
            
            if ($request->image1 == "changed")
            {
                
                $patient=User::where('id', '=', $id)->first();
                
                $image = $request->image->getClientOriginalName();
                $request->image->storeAs('image',$data['email'].$image,'public');
                Storage::delete('public/image/' . $data['email'] . $patient->image);
                DB::update('update users set email=? where id = ?', [$data['email'],  $id]);
                DB::update('update users set name=? where id = ?', [$data['name'],  $id]);
                DB::update('update users set username=? where id = ?', [$data['username'],  $id]);
                DB::update('update users set image=? where id = ?', [($request->image1),  $id]);
                DB::update('update users set gender=? where id = ?', [($request->gender),  $id]);
                DB::update('update users set address=? where id = ?', [($request->address),  $id]);
                DB::update('update users set dob=? where id = ?', [$request->dob,  $id]);
                DB::update('update users set contact=? where id = ?', [$request->contact,  $id]);
                DB::update('update patients set homeNo=? where patient_id = ?', [$request->homeNo,  $id]);
                return back()->with('success', "Changed successfully");
            }
            else
            {
                DB::update('update users set email=? where id = ?', [$data['email'],  $id]);
                DB::update('update users set name=? where id = ?', [$data['name'],  $id]);
                DB::update('update users set username=? where id = ?', [$data['username'],  $id]);
                DB::update('update users set image=? where id = ?', [("user.png"),  $id]);
                DB::update('update users set gender=? where id = ?', [($request->gender),  $id]);
                DB::update('update users set address=? where id = ?', [($request->address),  $id]);
                DB::update('update users set dob=? where id = ?', [$request->dob,  $id]);
                DB::update('update users set contact=? where id = ?', [$request->contact,  $id]);
                DB::update('update patients set homeNo=? where patient_id = ?', [$request->homeNo,  $id]);
                return back()->with('success', "Changed successfully");
            }
         } catch (Exception $exception) 
            {
                return back()->withError($exception->getMessage())->withInput();
            }
        

    }
    public function loadupdatePatient(Request $request)
    {
        $patient= DB::table('patients')->where('patient_id',Auth::user()->id)->first();
        return view('/managepatient',['patient' => $patient]);
    }
    public function test(Request $request)
    {
        $symptoms = array('itching',
        'skin_rash',
        'nodal_skin_eruptions',
        'continuous_sneezing',
        'shivering',
        'chills',
        'joint_pain',
        'stomach_pain',
        'acidity',
        'ulcers_on_tongue',
        'muscle_wasting',
        'vomiting',
        'burning_micturition',
        'spotting_ urination',
        'fatigue',
        'weight_gain',
        'anxiety',
        'cold_hands_and_feets',
        'mood_swings',
        'weight_loss',
        'restlessness',
        'lethargy',
        'patches_in_throat',
        'irregular_sugar_level',
        'cough',
        'high_fever',
        'sunken_eyes',
        'breathlessness',
        'sweating',
        'dehydration',
        'indigestion',
        'headache',
        'yellowish_skin',
        'dark_urine',
        'nausea',
        'loss_of_appetite',
        'pain_behind_the_eyes',
        'back_pain',
        'constipation',
        'abdominal_pain',
        'diarrhoea',
        'mild_fever',
        'yellow_urine',
        'yellowing_of_eyes',
        'acute_liver_failure',
        'fluid_overload',
        'swelling_of_stomach',
        'swelled_lymph_nodes',
        'malaise',
        'blurred_and_distorted_vision',
        'phlegm',
        'throat_irritation',
        'redness_of_eyes',
        'sinus_pressure',
        'runny_nose',
        'congestion',
        'chest_pain',
        'weakness_in_limbs',
        'fast_heart_rate',
        'pain_during_bowel_movements',
        'pain_in_anal_region',
        'bloody_stool',
        'irritation_in_anus',
        'neck_pain',
        'dizziness',
        'cramps',
        'bruising',
        'obesity',
        'swollen_legs',
        'swollen_blood_vessels',
        'puffy_face_and_eyes',
        'enlarged_thyroid',
        'brittle_nails',
        'swollen_extremeties',
        'excessive_hunger',
        'extra_marital_contacts',
        'drying_and_tingling_lips',
        'slurred_speech',
        'knee_pain',
        'hip_joint_pain',
        'muscle_weakness',
        'stiff_neck',
        'swelling_joints',
        'movement_stiffness',
        'spinning_movements',
        'loss_of_balance',
        'unsteadiness',
        'weakness_of_one_body_side',
        'loss_of_smell',
        'bladder_discomfort',
        'foul_smell_of urine',
        'continuous_feel_of_urine',
        'passage_of_gases',
        'internal_itching',
        'toxic_look_(typhos)',
        'depression',
        'irritability',
        'muscle_pain',
        'altered_sensorium',
        'red_spots_over_body',
        'belly_pain',
        'abnormal_menstruation',
        'dischromic _patches',
        'watering_from_eyes',
        'increased_appetite',
        'polyuria',
        'family_history',
        'mucoid_sputum',
        'rusty_sputum',
        'lack_of_concentration',
        'visual_disturbances',
        'receiving_blood_transfusion',
        'receiving_unsterile_injections',
        'coma',
        'stomach_bleeding',
        'distention_of_abdomen',
        'history_of_alcohol_consumption',
        'fluid_overload.1',
        'blood_in_sputum',
        'prominent_veins_on_calf',
        'palpitations',
        'painful_walking',
        'pus_filled_pimples',
        'blackheads',
        'scurring',
        'skin_peeling',
        'silver_like_dusting',
        'small_dents_in_nails',
        'inflammatory_nails',
        'blister',
        'red_sore_around_nose',
        'yellow_crust_ooze');
        return view('/patientTestRecommendation',['symptoms' => $symptoms]);
    }
    public function patientOwnEditFunc(Request $request)
    {
        return view('/patientOwnEditProfile');
    }
    public function updatePatientProf(Request $request)
    {
        if(Auth::user()->type==4)
        try {
            $data = $request->input();
            
                $email = $request->email;
                $ac=User::where('id', '=', Auth::user()->id)->first();
                
                DB::update('update users set email=? where id = ?', [$data['email'],  Auth::user()->id]);
                DB::update('update users set name=? where id = ?', [$data['name'],  Auth::user()->id]);
                DB::update('update users set username=? where id = ?', [$data['username'],  Auth::user()->id]);
                DB::update('update users set gender=? where id = ?', [($request->gender),  Auth::user()->id]);
                DB::update('update users set address=? where id = ?', [($request->address),  Auth::user()->id]);
                DB::update('update users set dob=? where id = ?', [$request->dob,  Auth::user()->id]);
                DB::update('update users set contact=? where id = ?', [$request->contact,  Auth::user()->id]);
                return back()->with('success', "Changed successfully");
         } catch (Exception $exception) 
            {
                return back()->withError($exception->getMessage())->withInput();
            }
    }
    
}

