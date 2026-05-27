<?php

namespace App\Http\Controllers;

use App\Prescription;
use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as DB;
use Exception;

class PrescriptionController extends Controller
{
    public function create(Request $request, $id)
    {
        try 
        {
            $appointment=Appointment::with('patient','doctor')->where('id','=',$id)->first(); 
            
            $data = $request->input();
            $prescription=new Prescription;
            DB::update('update appointments set patient_weight=? where id = ?', [($data['patient_weight']),  $id]);
            DB::update('update appointments set disease=? where id = ?', [($data['disease']),  $id]); 

            $prescription->doctor_id=Auth::user()->id;
            $prescription->appointment_id=$id;
            $prescription->patient_id=$appointment->patient_id;
            $prescription->date=$appointment->date;
            $prescription->time=$appointment->time;
            $prescription->med_name = $data['med_name'];
            $prescription->med_description = $data['med_description'];
            $prescription->med_type = $data['med_type'];
            $prescription->med_dose = $data['med_dose'];
            $prescription->save();
            return back()->with('success', "Medicine Added successfully");
        } catch (Exception $exception) {
            
                return back()->withError($exception->getMessage())->withInput();
        }
    }

    public function indexForStaff()
    {
        $prescriptions=Prescription::with('patient','doctor')->where('doctor_id','=',Auth::user()->id)->get();
        $appointment=Appointment::where('doctor_id','=',Auth::user()->id)->get();
        return view('/staffViewPrescription',['prescriptions' => $prescriptions],['appointments' => $appointment]);
    }
    public function index()
    {
        $prescriptions=Prescription::with('patient','doctor')->where('patient_id','=',Auth::user()->id)->get();
        $appointment=Appointment::where('patient_id','=',Auth::user()->id)->get();
        return view('/patientViewPrescription',['prescriptions' => $prescriptions], ['appointments' => $appointment]);
    }

    public function show(Request $request , $id)
    {
        $prescriptions=Prescription::where('appointment_id','=',$id)->get();
        
        return view('/staffShowPrescription',['prescriptions' => $prescriptions]);
    }
    public function delete(Request $request, $id)
    {
        try {
            DB::delete('delete from prescriptions where id = ?', [$id]);
            return back()->with('success', "Prescription Deleted Successfully");
        } catch (Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    public function update(Request $request, $id)
    {
        try 
        {
            $data = $request->input();
            DB::update('update prescriptions set med_name=? where id = ?', [$request['med_name'],  $id]);
            DB::update('update prescriptions set med_type =? where id = ?', [$request['med_type'],  $id]);
            DB::update('update prescriptions set med_description=? where id = ?', [$request['med_description'],  $id]);
            DB::update('update prescriptions set med_dose=? where id = ?', [$request['med_dose'],  $id]);
            return back()->with('success', "Prescription Updated Successfully");
            } catch (Exception $exception) {
                return back()->withError($exception->getMessage())->withInput();
            }
        

    }

}
