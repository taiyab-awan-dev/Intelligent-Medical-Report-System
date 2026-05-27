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
class ReceptionistController extends Controller
{
        
    public function viewreg()
    {
        return view('/receptionistRegisterForm');
    }
    public function viewrecppat()
    {
   
        return view('/receptionistPatientRegister');
    }

    public function updatePatient1(Request $request, $id)
    {
        
        try {
            $data = $request->input();
            
                $email = $request->email;
                $pa=User::where('id', '=', $id)->first();
                
                DB::update('update users set email=? where id = ?', [$data['email'],  $id]);
                DB::update('update users set name=? where id = ?', [$data['name'],  $id]);
                DB::update('update users set username=? where id = ?', [$data['username'],  $id]);
                DB::update('update users set gender=? where id = ?', [($request->gender),  $id]);
                DB::update('update users set address=? where id = ?', [($request->address),  $id]);
                DB::update('update users set dob=? where id = ?', [$request->dob,  $id]);
                DB::update('update users set contact=? where id = ?', [$request->contact,  $id]);
                DB::update('update patients set homeNo=? where patient_id = ?', [$request->homeNo,  $id]);
                return back()->with('success', "Changed successfully");
         } catch (Exception $exception) 
            {
                return back()->withError($exception->getMessage())->withInput();
            }
        

    }
    public function updatePatient2(Request $request, $id)
    {
        
        try {
            $data = $request->input();
            
                $email = $request->email;
                $pa=User::where('id', '=', $id)->first();
                
                DB::update('update users set address=? where id = ?', [($request->address),  $id]);
                DB::update('update users set contact=? where id = ?', [$request->contact,  $id]);
                DB::update('update patients set homeNo=? where patient_id = ?', [$request->homeNo,  $id]);
                //DB::update('update patients set martial_status=? where patient_id = ?', [$request->martialStatus,  $id]);
                DB::update('update patients set emergency_contact=? where patient_id = ?', [$request->emerygencyContact,  $id]);
                DB::update('update patients set Trusted_email=? where patient_id = ?', [$request->trustedEmail,  $id]);
                DB::update('update patients set postal_code=? where patient_id = ?', [$request->postalCode,  $id]);
                DB::update('update patients set mother_name=? where patient_id = ?', [$request->motherName,  $id]);
                DB::update('update patients set city=? where patient_id = ?', [$request->city,  $id]);
                DB::update('update patients set workNo=? where patient_id = ?', [$request->workNo,  $id]);
                
                return back()->with('success', "Changed successfully");
            
            
         } catch (Exception $exception) 
            {
                return back()->withError($exception->getMessage())->withInput();
            }
        

    }
    public function updatePatient3(Request $request, $id)
    {
        
        try {
            $data = $request->input();
            
                $email = $request->email;
                $pa=User::where('id', '=', $id)->first();
                
                DB::update('update patients set occupation=? where patient_id = ?', [$request->occupation,  $id]);
                DB::update('update patients set industry=? where patient_id = ?', [$request->industry,  $id]);
                DB::update('update patients set employer_city=? where patient_id = ?', [$request->employerCity,  $id]);
                DB::update('update patients set employer_postal_code=? where patient_id = ?', [$request->employerPostalCode,  $id]);
                
                return back()->with('success', "Changed successfully");
            
            
         } catch (Exception $exception) 
            {
                return back()->withError($exception->getMessage())->withInput();
            }
        

    }
    public function updatePatient4(Request $request, $id)
    {
        
        try {
            $data = $request->input();
            
                $email = $request->email;
                $pa=User::where('id', '=', $id)->first();
                
                DB::update('update patients set language=? where patient_id = ?', [$request->language,  $id]);
                DB::update('update patients set family_size=? where patient_id = ?', [$request->familySize,  $id]);
                DB::update('update patients set income=? where patient_id = ?', [$request->income,  $id]);
                DB::update('update patients set refferal_source=? where patient_id = ?', [$request->refferalSource,  $id]);
                DB::update('update patients set religion=? where patient_id = ?', [$request->religion,  $id]);
                DB::update('update patients set migrant_or_seasonal=? where patient_id = ?', [$request->migrantOrSeasonal,  $id]);
                
                return back()->with('success', "Changed successfully");
            
            
         } catch (Exception $exception) 
            {
                return back()->withError($exception->getMessage())->withInput();
            }
        

    }
    public function updatePatient5(Request $request, $id)
    {
        
        try {
            $data = $request->input();
            
                $email = $request->email;
                $pa=User::where('id', '=', $id)->first();
                DB::update('update patients set guardian_name=? where patient_id = ?', [$request->guardianName,  $id]);
                DB::update('update patients set guardian_address=? where patient_id = ?', [$request->gaurdianAddress,  $id]);
                DB::update('update patients set guardian_contact=? where patient_id = ?', [$request->guardianContact,  $id]);
                DB::update('update patients set guardian_city=? where patient_id = ?', [$request->guardianCity,  $id]);
                DB::update('update patients set guardian_postal_code=? where patient_id = ?', [$request->guardianPostalCode,  $id]);
                DB::update('update patients set guardian_workNo=? where patient_id = ?', [$request->guardianWorkNo,  $id]);
                
                return back()->with('success', "Changed successfully");
            
            
         } catch (Exception $exception) 
            {
                return back()->withError($exception->getMessage())->withInput();
            }
        

    }
    public function addPatient(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6',
            'dob' => 'date_format:Y-m-d|before:today',
        ];
        $validator = Validator::make($request->input(), $rules);
        if ($validator->fails()) {
            return back()->withError($validator->getMessageBag())->withInput();
        } else
        {
            try {
                $data = $request->input();
                $Patient = new User;
                if($request->has('image'))
                {               
                    $filename = $data['image']->getClientOriginalName();
                    $data['image']->storeAs('image',$data['email'].$filename,'public');
                    $Patient->image = $data['image']->getClientOriginalName();
                }
                else
                $Patient->image = "user.png";
                $Patient->username = $data['username'];
                $Patient->name = $data['name'];
                $Patient->joined_date = $data['joinedDate'];
                $Patient->dob = $data['dob'];
                $Patient->contact = $data['contact'];
                $Patient->gender = $data['gender'];
                $Patient->email = $data['email'];
                $Patient->password = Hash::make($data['password']);
                $Patient->type= 4 ;
                $Patient->save();
                $Patient1 = new Patient;
                $Patient1->Patient_id=$Patient->id;
                $Patient1->homeNo=$data['homeNo'];
                $Patient1->martial_status=$data['martialStatus'];
                $Patient1->emergency_contact=$data['emerygencyContact'];
                $Patient1->Trusted_email=$data['trustedEmail'];
                $Patient1->postal_code=$data['postalCode'];
                $Patient1->city=$data['city'];
                $Patient1->mother_name=$data['motherName'];
                $Patient1->workNo=$data['workNo'];
                $Patient1->occupation=$data['occupation'];
                $Patient1->industry=$data['industry'];
                $Patient1->employer_city=$data['employerCity'];
                $Patient1->employer_postal_code=$data['employerPostalCode'];
                $Patient1->language=$data['language'];
                $Patient1->family_size=$data['familySize'];
                $Patient1->income=$data['income'];
                $Patient1->refferal_source=$data['refferalSource'];
                $Patient1->religion=$data['religion'];
                $Patient1->migrant_or_seasonal=$data['migrantOrSeasonal'];
                $Patient1->guardian_address=$data['gaurdianAddress'];
                $Patient1->guardian_name=$data['guardianName'];
                $Patient1->guardian_contact=$data['guardianContact'];
                $Patient1->guardian_city=$data['guardianCity'];
                $Patient1->guardian_postal_code=$data['guardianPostalCode'];
                $Patient1->guardian_workNo=$data['guardianWorkNo'];
                $Patient1->save();
                return back()->with('success', "Patient Added successfully");
            } catch (Exception $exception) {
                return back()->withError($exception->getMessage())->withInput();
            }
        }
    }
    public function receptionistOwnEditFunc(Request $request)
    {
        return view('/receptionistOwnEditProfile');
    }
    public function updateReceptionistProf(Request $request)
    {
        if(Auth::user()->type==3)
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
    public function loadupdatePatient(Request $request)
    {
        if(Auth::user()->type==3)
       {
            $users= DB::select('select * from users');
            $patients= DB::select('select * from patients');
            return view('/receptionistManagePatient',['users'=>$users,'patients' => $patients]);
        }
    }
}
