<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){
            //Validate UserInformation
            $this->validate($request,[
                'email' => 'required',
                'password' => 'required'
            ]);

            $user = User::where('email', $request->email)->first();
            
            if($user != null){
                // Check User Type

                if($user['user_type'] == 'Patient'){
                    return redirect()->route('patient.index');
                }
    
                if($user['user_type'] == 'Admin'){
                    return redirect()->route('admin.index');
                }    
            }   
            else{
                // return redirect()->route('login.custom')->with('message','Email or Password dosen\'t matched');
                // echo 'Invalid Username or Password';
                return redirect('/signup')->with('message','Email or Password dosen\'t matched');
                
            }        
            
        }
    }
}
