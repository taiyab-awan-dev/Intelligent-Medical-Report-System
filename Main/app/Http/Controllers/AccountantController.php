<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Exception;

class AccountantController extends Controller
{
    public function updateAccountant(Request $request, $id)
    {
        
        try {
            $data = $request->input();
            
            if ($request->image1 == "changed")
            {
                $email = $request->email;
                $ac=User::where('id', '=', $id)->first();
                
                $imag = $request->image->getClientOriginalName();
                $request->image->storeAs('image',$email.$imag,'public');
                Storage::delete('public/image/' . $email . $ac->image);
                DB::update('update users set email=? where id = ?', [$data['email'],  $id]);
                DB::update('update users set name=? where id = ?', [$data['name'],  $id]);
                DB::update('update users set username=? where id = ?', [$data['username'],  $id]);
                DB::update('update users set image=? where id = ?', [($request->image1),  $id]);
                DB::update('update users set gender=? where id = ?', [($request->gender),  $id]);
                DB::update('update users set address=? where id = ?', [($request->address),  $id]);
                DB::update('update users set dob=? where id = ?', [$request->dob,  $id]);
                DB::update('update users set contact=? where id = ?', [$request->contact,  $id]);
                DB::update('update accountants set qualifications=? where patient_id = ?', [$request->qualifications,  $id]);
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
                DB::update('update accountants set qualifications=? where accountant_id = ?', [$request->qualifications,  $id]);
                return back()->with('success', "Changed successfully");
            }
         } catch (Exception $exception) 
            {
                return back()->withError($exception->getMessage())->withInput();
            }
        

    }
    public function loadupdateAccountant(Request $request)
    {
        $accountant= DB::table('accountants')->where('accountant_id',Auth::user()->id)->first();
        return view('/manageAccountant',['accountant' => $accountant]);
    }
    public function accountantOwnEditFunc(Request $request)
    {
        return view('/accountantOwnEditProfile');
    }
    public function updateAccountantProf(Request $request)
    {
        if(Auth::user()->type==1)
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
