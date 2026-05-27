<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Exception;
use Illuminate\Auth\Events\Logout;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function AuthRouteAPI(Request $request){
        return $request->user();
     }
    public function login()
    {
        return view('/auth/login');
    }
    public function adminlogin()
    {
        
            return view('/adminDashboard');
        
    }

    public function changegeneral(Request $request, $id)
    {
        $name = $request->name;
        $email = $request->email;
        try {
            if ($request->image1 == "user.png")
            {
            if ($request->comname != null) {
                DB::update('update users set email=? where id = ?', [$email,  $id]);
                DB::update('update users set name=? where id = ?', [($name),  $id]);
                DB::update('update users set comname=? where id = ?', [($request->comname),  $id]);
                DB::update('update users set image=? where id = ?', [($request->image1),  $id]);
                return back()->with('success', "Changed successfully");
            } else {
                DB::update('update users set email=? where id = ?', [$email,  $id]);
                DB::update('update users set name=? where id = ?', [($name),  $id]);
                DB::update('update users set image=? where id = ?', [($request->image1),  $id]);
                return back()->with('success', "Changed successfully");
            }
        }
        else if ($request->image1 == "changed")
        {
            $pa=User::where('id', '=', $id)->first();
           
            $imag = $request->image->getClientOriginalName();
            $request->image->storeAs('image',$email.$imag,'public');
            Storage::delete('public/image/' . $email . $pa->image);
            if ($request->comname != null) {
                DB::update('update users set email=? where id = ?', [$email,  $id]);
                DB::update('update users set name=? where id = ?', [($name),  $id]);
                DB::update('update users set comname=? where id = ?', [($request->comname),  $id]);
                DB::update('update users set image=? where id = ?', [($imag),  $id]);
                return back()->with('success', "Changed successfully");
            } else {
                DB::update('update users set email=? where id = ?', [$email,  $id]);
                DB::update('update users set name=? where id = ?', [($name),  $id]);
                DB::update('update users set image=? where id = ?', [($imag),  $id]);
                return back()->with('success', "Changed successfully");
            }
        }
        else
        {
            if ($request->comname != null) {
                DB::update('update users set email=? where id = ?', [$email,  $id]);
                DB::update('update users set name=? where id = ?', [($name),  $id]);
                DB::update('update users set comname=? where id = ?', [($request->comname),  $id]);
                return back()->with('success', "Changed successfully");
            } else {
                DB::update('update users set email=? where id = ?', [$email,  $id]);
                DB::update('update users set name=? where id = ?', [($name),  $id]);
                return back()->with('success', "Changed successfully");
            }
        }
        } catch (Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }
    
    public function changeinfo(Request $request, $id)
    {
        try {
            DB::update('update users set bio=? where id = ?', [$request->bio,  $id]);
            DB::update('update users set dob=? where id = ?', [$request->dob,  $id]);
            DB::update('update users set country=? where id = ?', [$request->country,  $id]);
            DB::update('update users set phone=? where id = ?', [$request->phone,  $id]);

            return back()->with('success', "Info Changed successfully");
        } catch (Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }
}
