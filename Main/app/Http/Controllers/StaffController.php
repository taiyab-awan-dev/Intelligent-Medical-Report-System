<?php

namespace App\Http\Controllers;


use App\User;
use App\Appointment;
use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Exception;

class StaffController extends Controller
{
    public function loadupdatePatientforGeneratePrescription(Request $request)
    {
        if(Auth::user()->type==2)
       {
            $appointments=Appointment::with('patient','doctor')->whereIn('status',[1,2])->where('doctor_id','=',Auth::user()->id)->get();
            
            $users= DB::select('select * from users');
            return view('/staffGeneratePrescription',['users'=>$users,'appointments' => $appointments]);
        }
    }
    public function loadupdatePatientForReport(Request $request)
    {
        if(Auth::user()->type==2)
       {
            $users= DB::select('select * from users');
            $patients= DB::select('select * from patients');
            return view('/staffViewReports',['users'=>$users,'patients' => $patients]);
        }
    }
    public function loadupdatePatientforPrescription(Request $request)
    {
        if(Auth::user()->type==2)
       {
            $users= DB::select('select * from users');
            $patients= DB::select('select * from patients');
            return view('/staffViewPrescription',['users'=>$users,'patients' => $patients]);
        }
    }
    public function staffOwnEditFunc(Request $request)
    {
        return view('/staffOwnEditProfile');
    }
    public function updateStaffProf(Request $request)
    {
        if(Auth::user()->type==2)
        try {
            $data = $request->input();
            
                $email = $request->email;
                
                
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
    public function updateStaffTimeFunc(Request $request)
    {
        if(Auth::user()->type==2)
        try {
            $data = $request->input();
            
                $email = $request->email;
                $ac=User::where('id', '=', Auth::user()->id)->first();
                $time2=$request->time2." ".$request->PM;
                $time1=$request->time1." ".$request->AM;
                DB::update('update staff set timefrom=? where staff_id = ?', [$time1,  Auth::user()->id]);
                DB::update('update staff set timeto=? where staff_id = ?', [$time2,  Auth::user()->id]);
                return back()->with('success', "Changed successfully");
         } catch (Exception $exception) 
            {
                return back()->withError($exception->getMessage())->withInput();
            }
    }
    public function changeTime(Request $request)
    {   
        $doctor = Staff::where('staff_id', '=', Auth::user()->id)->first();
          return view('/staffChangeTimeView',['doctor'=> $doctor]);     
    }
    public function viewadd()
    {
        return view('/addStaffRegister');
    }
}
