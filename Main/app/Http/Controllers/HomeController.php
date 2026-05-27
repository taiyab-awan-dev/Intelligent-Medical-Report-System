<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Patient;
use DateTime;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function login()
    {

        if (Auth::user()->type == 0)
            return view('/adminDashboard');
        else  if (Auth::user()->type == 1)
            return view('/accountantDashboard');
        else if (Auth::user()->type == 2)
            return view('/staffDashboard');
        else if (Auth::user()->type == 3)
            return view('/receptionistDashboard');
        else if (Auth::user()->type == 4) {
            if (Patient::where('patient_id', '=', Auth::user()->id)->count() === 0) {
                $patient = new Patient;
                $patient->patient_id = Auth::user()->id;
                $patient->save();
                // dd($patient);
            }
            $flag = 0;
            $time=0;
            if (Appointment::where('patient_id', '=', Auth::user()->id)->count() != 0) {
                $appointments = Appointment::where('patient_id', '=', Auth::user()->id)->get();
                
                $currenttime = date('i', strtotime(date("h:i:s a")));
                $currentdate = date("Y-m-d");
                foreach ($appointments as $appointment) {
                    if ($currentdate == $appointment->date)
                        $time = date('i', strtotime($appointment->time));
                        $dif = (int)$time-(int)$currenttime;
                        if((int)$dif <= 30 && $dif>0)
                       // if($currenttime-$appointment->time <=30 && $currenttime-$appointment->time > 0)
                        $flag=1;
                }
               
            }
            return view('/patientDashboard', ['flag' => $flag]);
        }
    }
    public function loginview()
    {
        return view('/auth/login');
    }
}
