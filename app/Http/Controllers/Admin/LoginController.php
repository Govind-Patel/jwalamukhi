<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    function loginbasic(Request $request){
        return view('admin.auth.login');
    }
    
    function adminsignin(Request $request){

        $this->validate($request,[
            'email'=>'required',
            'password' => 'required'
        ]);
        
        $getuser = User::where('email',$request->email)->first();
        
        if(!empty($getuser)){

            if(Hash::check($request->password,$getuser->password)){
                $request->session()->put('loginUser',$getuser);
                return redirect('admin/dashboard')->with('success','You have Successfully loggedin');

            }else{

                return redirect('admin/login')->with('error','your password dost match');
            }

        }else{

            return redirect("admin/login")->with('error','Oppes! You have entered invalid credentials');
       
        }
  
    }

    function signout(Request $request){

        $request->session()->forget('loginUser');
        return redirect('admin/login')->with('error','your are logout');
    }
}