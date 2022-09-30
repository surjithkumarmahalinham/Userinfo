<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        return view('register');
    }
    public function storeuser(Request $request)
    {
        $request->validate([
            'first_name' =>'required',
            'last_name' =>'required',
            'email' =>'required|email|unique:registers,email',
            'mobile' =>'required',
            'password' =>'required|confirmed',
        ]);

        $name = substr($request->first_name, 0,2);
        $mobile = substr( $request->mobile, -4 );
        $mail_id = $request->email;
        $otp = random_int(0, 999999);
        $user = new Register();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $mail_id;
        $user->mobile = $request->mobile;
        $user->password = Hash::make($request->password);
        $user->username = $name.$mobile;
        $user->otp = $otp;
        $user->save();
        if(isset($user))
        {
            Mail::send('otppage',compact('otp'),function($message) use ($mail_id) {   
            $message->to($mail_id); 
            $message->subject('Verification OTP');
            });
        
            return view('otpvalidate',compact('mail_id'));
        }else{
            return view('register');
        }
    }
    public function otpvalidate(Request $request)
    {
        $email_id = $request->email;
        $otp = $request->otp;
        $validate_query = Register::where('email',$email_id)->where('otp',$otp)->first();
        if(!empty($validate_query))
        {
            return view('login')->with('success', 'OTP Verified');
        }else{
            return view('register')->with('error', 'Invalide OTP');
        }
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' =>'required',
            'password' =>'required',
        ]);

        $user = DB::table('registers')
                         ->select('*')
                         ->where('email',$request->email)
                         ->first();
        if(Hash::check($request->password,$user->password))
        {   
            return view('home'); 
        }else{ 
            return view('login')->with('error', 'Invalide OTP');;
        }
                         
        
    }
}
