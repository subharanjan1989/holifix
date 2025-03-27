<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AuthController extends Controller
{
    public function userLogin() {
        return view('auth.user-login');
    }

    public function userLoginSubmit(Request $request) {
        $validator = Validator::make($request->all(), [
            "email" => [
                "required",
                "email",
                "regex:" . User::emailRegex,
                function ($attribute, $value, $fail) {
                    $user = DB::table('users')
                        ->where('email', $value)
                        ->first();
                    if(!isset($user->email)) {
                        $fail('The email does not exists in our system');
                    }else{
                        if($user->status=='inactive') {
                            $fail('User is blocked. Please contact to the administrator');
                        }
                    }                    
                },
            ],
            'password' => 'required',
        ],[
            'email.regex'=>'The email format is invalid.',
        ]);
 
        if ($validator->fails()) {
            return response()->json(['status'=>false, 'errors'=>$validator->errors()]);
        }

        $email = trim($request->email);
        $email = strtolower($email);
        $remember = $request->has('remember');

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            if(Auth::user()->role_name=='SUPER-ADMIN') {
                Session::flash('success', 'Successfully Logged In');
                return response()->json(['status'=>true, 'redirect_url'=>route('admin.dashboard')]);
            }else {
                Session::flush(); Auth::logout();
                return response()->json(['status'=>false, 'errors'=>$validator->errors()->add('password','Please log in using valid credentials')]);
            }
        }else {
            return response()->json(['status'=>false, 'errors'=>$validator->errors()->add('password','Wrong password. Try again or click forgot password')]);
        }
    }
}
