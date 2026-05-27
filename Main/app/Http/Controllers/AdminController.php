<?php

namespace App\Http\Controllers;

use App\Accountant;
use App\Patient;
use App\Receptionist;
use App\Staff;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Exception;

class AdminController extends Controller
{


    public function changepass(Request $request, $id)
    {
        
       
        try {

            $patient=User::where('id', '=', $id)->first();
             $check = (string)($request->oldpassword);
            
          
            if (Hash::check($check,$patient->password )) {
                $pass=bcrypt($request->pwd1);
                DB::update('update users set password=? where id = ?', [$pass,  $id]);
                return back()->with('success', "Password Changed successfully");
            } else {
                
                return back()->withError("Incorrect Password!")->withInput();
            }
        } catch (Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }
    public function addReceptionist(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6',

        ];
        $validator = Validator::make($request->input(), $rules);
        if ($validator->fails()) {
            return back()->withError($validator->getMessageBag())->withInput();
        } else
        {
            try {
                $data = $request->input();
                $receptionist = new User;
                if($request->has('image'))
                {               
                    $filename = $data['image']->getClientOriginalName();
                    $data['image']->storeAs('image',$data['email'].$filename,'public');
                    $receptionist->image = $data['image']->getClientOriginalName();
                }
                else
                $receptionist->image = "user.png";
                $receptionist->username = $data['username'];
                $receptionist->name = $data['name'];
                $receptionist->joined_date = $data['joined_date'];
                $receptionist->dob = $data['dob'];
                $receptionist->address = $data['address'];
                $receptionist->contact = $data['contact'];
                $receptionist->gender = $data['gender'];
                $receptionist->email = $data['email'];
                $receptionist->password = Hash::make($data['password']);
                $receptionist->type= 3 ;
                $receptionist->save();
                $receptionist1 = new Receptionist;
                $receptionist1->receptionist_id=$receptionist->id;
                $receptionist1->qualifications=$data['qualifications'];
                $receptionist1->save();
                return back()->with('success', "Receptionist Added successfully");
            } catch (Exception $exception) {
                return back()->withError($exception->getMessage())->withInput();
            }
        }
    }
    public function addStaff(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6',

        ];
        $validator = Validator::make($request->input(), $rules);
        if ($validator->fails()) {
            return back()->withError($validator->getMessageBag())->withInput();
        } else
        {
            try {
                $data = $request->input();
                $staff = new User;
                if($request->has('image'))
                {               
                    $filename = $data['image']->getClientOriginalName();
                    $data['image']->storeAs('image',$data['email'].$filename,'public');
                    $staff->image = $data['image']->getClientOriginalName();
                }
                else
                $staff->image = "user.png";
                $staff->username = $data['username'];
                $staff->name = $data['name'];
                $staff->joined_date = $data['joined_date'];
                $staff->dob = $data['dob'];
                $staff->contact = $data['contact'];
                $staff->gender = $data['gender'];
                $staff->address = $data['address'];
                $staff->email = $data['email'];
                $staff->password = Hash::make($data['password']);
                $staff->type= 2;
                $staff->save();
                $staff1 = new Staff;
                $staff1->staff_id=$staff->id;
                $staff1->qualifications=$data['qualifications'];
                $staff1->specialization=$data['specialization'];
                if($data['staffType']=="Medical Staff")
                {
                    $staff1->stafftype=1;
                    $staff1->pmdcNo=$data['pmdcNo'];
                }
                else
                {
                    $staff1->stafftype=0;
                    $staff1->technology=$data['technology'];
                }
                $staff1->timefrom="08:00 AM";
                $staff1->timeto="00:00 AM";
                $staff1->save();
                return back()->with('success', "Staff Added successfully");
            } catch (Exception $exception) {
                return back()->withError($exception->getMessage())->withInput();
            }
        }
    }
    public function addAccountant(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6',

        ];
        $validator = Validator::make($request->input(), $rules);
        if ($validator->fails()) {
            return back()->withError($validator->getMessageBag())->withInput();
        } else
        {
            try {
                $data = $request->input();
                $accountant = new User;
                if($request->has('image'))
                {               
                    $filename = $data['image']->getClientOriginalName();
                    $data['image']->storeAs('image',$data['email'].$filename,'public');
                    $accountant->image = $data['image']->getClientOriginalName();
                }
                else
                $accountant->image = "user.png";
                $accountant->username = $data['username'];
                $accountant->name = $data['name'];
                $accountant->joined_date = $data['joined_date'];
                $accountant->dob = $data['dob'];
                $accountant->contact = $data['contact'];
                $accountant->gender = $data['gender'];
                $accountant->email = $data['email'];
                $accountant->address = $data['address'];
                $accountant->password = Hash::make($data['password']);
                $accountant->type= 1 ;
                $accountant->save();
                $accountant1 = new Accountant;
                $accountant1->accountant_id=$accountant->id;
                $accountant1->qualifications=$data['qualifications'];
                $accountant1->save();
                return back()->with('success', "Accountant Added successfully");
            } catch (Exception $exception) {
                return back()->withError($exception->getMessage())->withInput();
            }
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
                $Patient->address = $data['address'];
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
    public function updateAccountant(Request $request, $id)
    {  
        try {
            $data = $request->input();
            
                $email = $request->email;
                $ac=User::where('id', '=', $id)->first();
                
                DB::update('update users set email=? where id = ?', [$data['email'],  $id]);
                DB::update('update users set name=? where id = ?', [$data['name'],  $id]);
                DB::update('update users set username=? where id = ?', [$data['username'],  $id]);
                DB::update('update users set gender=? where id = ?', [($request->gender),  $id]);
                DB::update('update users set address=? where id = ?', [($request->address),  $id]);
                DB::update('update users set dob=? where id = ?', [$request->dob,  $id]);
                DB::update('update users set contact=? where id = ?', [$request->contact,  $id]);
                DB::update('update accountants set qualifications=? where accountant_id = ?', [$request->qualifications,  $id]);
                return back()->with('success', "Changed successfully");
            
            
         } catch (Exception $exception) 
            {
                return back()->withError($exception->getMessage())->withInput();
            }
        

    }
    public function updateReceptionist(Request $request, $id)
    {
        
        try {
            $data = $request->input();
            
                $email = $request->email;
                $ac=User::where('id', '=', $id)->first();
                
                DB::update('update users set email=? where id = ?', [$data['email'],  $id]);
                DB::update('update users set name=? where id = ?', [$data['name'],  $id]);
                DB::update('update users set username=? where id = ?', [$data['username'],  $id]);
                DB::update('update users set gender=? where id = ?', [($request->gender),  $id]);
                DB::update('update users set address=? where id = ?', [($request->address),  $id]);
                DB::update('update users set dob=? where id = ?', [$request->dob,  $id]);
                DB::update('update users set contact=? where id = ?', [$request->contact,  $id]);
                DB::update('update receptionists set qualifications=? where receptionist_id = ?', [$request->qualifications,  $id]);
                return back()->with('success', "Changed successfully");
            
            
         } catch (Exception $exception) 
            {
                return back()->withError($exception->getMessage())->withInput();
            }
        

    }
    public function updateStaff(Request $request, $id)
    {
        
        try {
            $data = $request->input();
            
                $email = $request->email;
                $ac=User::where('id', '=', $id)->first();
                
                DB::update('update users set email=? where id = ?', [$data['email'],  $id]);
                DB::update('update users set name=? where id = ?', [$data['name'],  $id]);
                DB::update('update users set username=? where id = ?', [$data['username'],  $id]);
                DB::update('update users set gender=? where id = ?', [($request->gender),  $id]);
                DB::update('update users set address=? where id = ?', [($request->address),  $id]);
                DB::update('update users set dob=? where id = ?', [$request->dob,  $id]);
                DB::update('update users set contact=? where id = ?', [$request->contact,  $id]);
                DB::update('update staff set specialization=? where staff_id = ?', [$request->specialization,  $id]);
                DB::update('update staff set qualifications=? where staff_id = ?', [$request->qualifications,  $id]);
                
                
                return back()->with('success', "Changed successfully");
            
            
         } catch (Exception $exception) 
            {
                return back()->withError($exception->getMessage())->withInput();
            }
        

    }
    public function loadupdatePatient(Request $request)
    {
        if(Auth::user()->type==0)
       {
            $users= DB::select('select * from users');
            $patients= DB::select('select * from patients');
            return view('/adminManagePatient',['users'=>$users,'patients' => $patients]);
        }
    }
    public function loadupdateAccountant(Request $request)
    {
        if(Auth::user()->type==0)
       {
            $users= DB::select('select * from users');
            $accountants= DB::select('select * from accountants');
            return view('/editAccountantForm',['users'=>$users,'accountants' => $accountants]);
        }
    }
    public function loadupdateReceptionist(Request $request)
    {
        if(Auth::user()->type==0)
       {
            $users= DB::select('select * from users');
            $receptionists= DB::select('select * from receptionists');
            return view('/editReceptionistForm',['users'=>$users,'receptionists' => $receptionists]);
        }
    }
    public function loadupdateStaff(Request $request)
    {
        if(Auth::user()->type==0)
       {
            $users= DB::select('select * from users');
            $staffs= DB::select('select * from staff');
            return view('/editStaffForm',['users'=>$users,'staffs' => $staffs]);
        }
    }
    public function adminOwnEditFunc()
    {
       return view('/adminOwnEditProfile');
    }
    public function updateAdminProf(Request $request)
    {
         if(Auth::user()->type==0)
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


    public function viewaccreg()
    {
        return view('/accountantRegisterForm');
    }
    public function viewpatreg()
    {
   
        return view('/patientRegister');
    }
}
