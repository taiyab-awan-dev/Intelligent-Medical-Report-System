<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Appointment;
use App\Invoice;
use App\Patient;
use App\Remainder;
use App\Staff;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Exception;

class AppointmentController extends Controller
{
    public function index()
    {
        if(Auth::user()->type==4)
        {
            $appointments=Appointment::with('patient','doctor')->where('patient_id','=',Auth::user()->id)->get();
            $doctors= Staff::with('doctor')->where('stafftype','=',1)->get();
            return view('/patientAppointment',['appointments' => $appointments,'doctors' => $doctors]);
    
        }
        else if(Auth::user()->type==1)
        {
            $appointments=Appointment::with('patient','doctor')->whereIn('status',[1])->get();
            $doctors= Staff::with('doctor')->where('stafftype','=',1)->get();
            $patients=Patient::with('patient')->get();
            $invoices=DB::select('select * from invoices');
            return view('/accountantConfirmAppointment',['appointments' => $appointments,'patients' => $patients,'doctors' => $doctors,'invoices'=>$invoices]);
       
        }

        $appointments=Appointment::with('patient','doctor')->get();
        $doctors= Staff::with('doctor')->where('stafftype','=',1)->get();
        $patients=Patient::with('patient')->get();
        return view('/receptionistSchedule',['appointments' => $appointments,'patients' => $patients,'doctors' => $doctors]);
    }
    public function indexForStaff()
    {
        $appointments=Appointment::with('patient','doctor')->whereIn('status',[1,2])->where('doctor_id','=',Auth::user()->id)->get();
        $doctors= Staff::with('doctor')->where('stafftype','=',1)->get();
        $patients=Patient::with('patient')->get();
        return view('/staffScheduleLookup',['appointments' => $appointments,'patients' => $patients,'doctors' => $doctors]);
    }


    public function addInvoiceFunc(Request $request, $id)
    {
        try{
        
            $appointment=DB::table('appointments')->where('id', $id)->first();
            $doctors=  DB::table('staff')->where('staff_id', $appointment->doctor_id)->first();
            $patients=  DB::table('patients')->where('patient_id', $appointment->patient_id)->first();
            $user=DB::table('users')->where('id', $appointment->patient_id)->first();
            $user1=DB::table('users')->where('id', $appointment->doctor_id)->first();
            $amount=$request->charges;
            if(Invoice::where('id','=',$id)->count() === 0)
            {
                $invoice= new Invoice();
                $invoice->id=$appointment->id;
                $invoice->status=0;
                $invoice->patientname=$user->name;
                $invoice->patient_id=$patients->patient_id;
                $invoice->doctor_id=$doctors->staff_id;
                $invoice->patientemail=$user->email;
                $invoice->patientcontact=$user->contact;
                $invoice->patientaddress=$user->address;
                $invoice->doctorname=$user1->name;
                $invoice->doctoremail=$user1->email;
                $invoice->generatedby=Auth::user()->name;
                $invoice->amount=$amount;
                $invoice->time=$appointment->time;
                $invoice->date=$appointment->date;
                $invoice->save();

            }
            else
            DB::update('update invoices set amount = ? where id = ?',[$amount,$id]);
            return view('/invoice',['appointment' => $appointment,'patients' => $patients,'doctors' => $doctors, 'amount'=>$amount, 'user'=>$user,'user1'=>$user1]);
        
        } catch (Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }
    public function create(Request $request)
    {
        //$today=date('Y-m-d');
        
        $today=Carbon::yesterday();
        
        $rules = [
            'date' => 'required|date|after:' . $today . '',
        ];
        $validator = Validator::make($request->input(), $rules);
        if ($validator->fails()) {
            return back()->withError("Date Must be of today or after today.")->withInput();
        } else
        {
            $today=date('d');
            $che=Carbon::parse($request['date'])->format('d');
            if($che==$today)
            {
        $time = date('H');
        $timeHours = $request->time;//change it to 8:00 PM,9:00 PM,10:00 PM  it works
        $timeH = Carbon::parse($timeHours)->format('H');
        if($time>=$timeH)
        return back()->withError("Incorrect Time Entered.")->withInput();
        
            }
            
            try {

                $data = $request->input();
                if($data['time']=='Select Time')
            {
                return back()->withError("Time not selected!")->withInput();
        
            }
                $appoi=new Appointment;
                $appoi->doctor_id=$data['doctor_id'];
                $appoi->patient_id=$data['patient_id'];
                $appoi->date=$data['date'];
                
                $appoi->time=$data['time'];
                $appoi->status=1;
                $appoi->save();
                $reminder=new Remainder();
                $reminder->status=0;
                $reminder->patient_id=$data['patient_id'];
                $reminder->doctor_id=$data['doctor_id'];
                $reminder->appointment_id=$appoi->id;
                $reminder->save();
                return back()->with('success', "Appointment Scheduled successfully");
            } catch (Exception $exception) {
                return back()->withError($exception->getMessage())->withInput();
            }
        }

    }
    public function patcreate(Request $request)
    {
        //$today=date('Y-m-d');
        
        $today=Carbon::yesterday();
        
        $rules = [
            'date' => 'required|date|after:' . $today . '',
        ];
        $validator = Validator::make($request->input(), $rules);
        if ($validator->fails()) {
            return back()->withError("Date Must be of today or after today.")->withInput();
        } else
        {
            $today=date('d');
            $che=Carbon::parse($request['date'])->format('d');
            if($che==$today)
            {
        $time = date('H');
        $timeHours = $request->time;//change it to 8:00 PM,9:00 PM,10:00 PM  it works
        $timeH = Carbon::parse($timeHours)->format('H');
        if($time>=$timeH)
        return back()->withError("Incorrect Time Entered.")->withInput();
      
            }
            try {
                $data = $request->input();
                if($data['time']=='Select Time')
            {
                return back()->withError("Time not selected!")->withInput();
        
            }
                $appoi=new Appointment;
                $appoi->doctor_id=$data['doctor_id'];
                $appoi->patient_id=Auth::user()->id;
                $appoi->date=$data['date'];
                $appoi->time=$data['time'];
                $appoi->status=1;
                $appoi->save();
                return back()->with('success', "Appointment Scheduled successfully");
            } catch (Exception $exception) {
                return back()->withError("Slot already reserved!");
            }
        }

    }

    public function update(Request $request, $id)
    {
        if(Auth::user()->type==4)
        {
            $today=Carbon::yesterday();
        
        $rules = [
            'date' => 'required|date|after:' . $today . '',
        ];
        $validator = Validator::make($request->input(), $rules);
        if ($validator->fails()) {
            return back()->withError("Date Must be of today or after today.")->withInput();
        } else
        {
            $today=date('d');
            $che=Carbon::parse($request['date'])->format('d');
            if($che==$today)
            {
        $time = date('H');
        $timeHours = $request->time;//change it to 8:00 PM,9:00 PM,10:00 PM  it works
        $timeH = Carbon::parse($timeHours)->format('H');
        if($time>=$timeH)
        return back()->withError("Incorrect Time Entered.")->withInput();
      
            }
            try {
                $data = $request->input();
                DB::update('update appointments set patient_id=? where id = ?', [Auth::user()->id,  $id]);
                DB::update('update appointments set doctor_id=? where id = ?', [$request['doctor_id'],  $id]);
                DB::update('update appointments set date=? where id = ?', [$request['date'],  $id]);
                DB::update('update appointments set time=? where id = ?', [$request['time'],  $id]);
                return back()->with('success', "Appointment Updated Successfully");
            } catch (Exception $exception) {
                return back()->withError($exception->getMessage())->withInput();
            }
        }
        }

        $today=Carbon::yesterday();
        
        $rules = [
            'date' => 'required|date|after:' . $today . '',
        ];
        $validator = Validator::make($request->input(), $rules);
        if ($validator->fails()) {
            return back()->withError("Date Must be of today or after today.")->withInput();
        } else
        {
            $today=date('d');
            $che=Carbon::parse($request['date'])->format('d');
            if($che==$today)
            {
        $time = date('H');
        $timeHours = $request->time;//change it to 8:00 PM,9:00 PM,10:00 PM  it works
        $timeH = Carbon::parse($timeHours)->format('H');
        if($time>=$timeH)
        return back()->withError("Incorrect Time Entered.")->withInput();
      
            }
            try {
                $data = $request->input();
                DB::update('update appointments set patient_id=? where id = ?', [$request['patient_id'],  $id]);
                DB::update('update appointments set doctor_id=? where id = ?', [$request['doctor_id'],  $id]);
                DB::update('update appointments set date=? where id = ?', [$request['date'],  $id]);
                DB::update('update appointments set time=? where id = ?', [$request['time'],  $id]);
                return back()->with('success', "Appointment Updated Successfully");
            } catch (Exception $exception) {
                return back()->withError($exception->getMessage())->withInput();
            }
        }

    }
    public function updatestatus3(Request $request, $id)
    {
        
            try {
                DB::update('update appointments set status=? where id = ?', [3,  $id]);
                return back()->with('success', "Appointment Completed Successfully");
            } catch (Exception $exception) {
                return back()->withError($exception->getMessage())->withInput();
            }
        

    }
    public function updatestatus2(Request $request, $id)
    {
        
            try {

                DB::update('update appointments set status=? where id = ?', [2,  $id]);
                DB::update('update invoices set status=? where id = ?', [1,  $id]);
                $invoice=DB::table('invoices')->where('id', $id)->first();
                return view('/reciept',['invoice' => $invoice]);
       
                return back()->with('success', "Payment Cleared Successfully");
            } catch (Exception $exception) {
                return back()->withError($exception->getMessage())->withInput();
            }
    }
    public function updatestatus4(Request $request, $id)
    {
        
            try {
                DB::update('update appointments set status=? where id = ?', [4,  $id]);
                return back()->with('success', "Appointment Cancelled Successfully");
            } catch (Exception $exception) {
                return back()->withError($exception->getMessage())->withInput();
            }
        

    }

    public function show(Appointment $appointment)
    {
    }

    public function delete(Request $request, $id)
    {
        try {
            DB::delete('delete from appointments where id = ?', [$id]);
            return back()->with('success', "Appointment Cancelled Successfully");
        } catch (Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }
}
