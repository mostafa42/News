<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function login(User $user, Request $request)
    {

        $data = User::where([
            ['email', '=', $request->email],
            ['password', '=', $request->password]
        ])->firstOrFail();

        $request->session()->put('token', 'my-secret-token-1032017');
        $request->session()->put('id', $data->id);
        $msg =  __("trans.successAlert1") ;
        return response()->json(['message' => $msg]);
    }



    public function sendEmailForgetPassword(Request $request)
    {
        $email = $request->email;
        $checkEmail = User::where([
            ['email', '=', $email]
        ])->firstOrFail();

        // check if email is correct or not

        if( !empty($checkEmail) ){

            $details = [
                'title' => 'Mail from News.com',
                'body' => 'This For Forget Your Password'
            ];

            Mail::to($email)->send(new \App\Mail\ourOfficialEmail($details));

            $request->session()->put('checkEmailSent', 'true');
            $request->session()->put('email_path', $email);

            $msg =  __("trans.pleaseCheckEmail") ;
            return response()->json(['message' => $msg]);
        }
    }

    public function resetPassword(Request $request){

        $emailPath = $request->session()->get('email_path');

        User::where('email',$emailPath)->update([
            'password' => $request->password
        ]);

        $request->session()->forget('checkEmailSent');
        $request->session()->put('token', 'my-secret-token-1032017');

        return response()->json([ 'msg' => 'Your password is updated' ]);


    }

    public function logout(Request $request)
    {
        $request->session()->forget('token');
        $request->session()->forget('checkEmailSent');
        return redirect('/adminAuth');
    }

    
}
