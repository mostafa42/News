<?php

namespace App\Http\Controllers;

use App\Models\forgetPasswordHistory;
use App\Models\User;
use Illuminate\Support\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Validator;

class AuthController extends Controller
{
    public function login(User $user, Request $request)
    {

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        try {
            $data = User::where([
                ['email', '=', $request->email],
                ['password', '=', $request->password]
            ])->firstOrFail();

            $request->session()->put('token', 'my-secret-token-1032017');
            $request->session()->put('id', $data->id);
            $msg = __('trans.successAlert1');
            return response()->json(['message' => "done", "message2" => $msg]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Email or password is wrong']);
        }
    }

    public function sendEmailForgetPassword(Request $request)
    {

        $validated = $request->validate([
            'email' => 'required|email'
        ]);

        try {

            $email = $request->email;

            $checkEmail = User::where([
                ['email', '=', $email]
            ])->firstOrFail();

            // check last time this user make reset password
            $firstAction = forgetPasswordHistory::first();
            $lastAction = forgetPasswordHistory::latest()->first();
            $totalDuration = $lastAction->created_at->diffInMinutes(Carbon::now());
                // handle of if he send two tring
                if ($totalDuration <= 1) {
                    return response()->json(['message' => "done", "message2" => "wait 3 minutes"]);
                } else {

                    // check if email is correct or not

                    $details = [
                        'title' => 'Mail from News.com',
                        'body' => 'This For Forget Your Password'
                    ];

                    // save action in forget password history table

                    // getting current date and time

                    $newRecord = new forgetPasswordHistory;
                    $newRecord->email = $email;
                    $newRecord->save();



                    $checkSendingEmail = Mail::to($email)->send(new \App\Mail\ourOfficialEmail($details));



                    $request->session()->put('checkEmailSent', 'true');
                    $request->session()->put('email_path', $email);

                    $msg =  __("trans.pleaseCheckEmail");
                    return response()->json(['message' => "done", "message2" => $msg]);
                }
        } catch (Exception $e) {
            $msg =  __("trans.emailNotValid");
            return response()->json(['message2' => $msg]);
        }
    }

    public function resetPassword(Request $request)
    {

        $validated = $request->validate([
            'password' => 'required',
            'repassword' => 'required'
        ]);

        try {
            $emailPath = $request->session()->get('email_path');

            User::where('email', $emailPath)->update([
                'password' => $request->password
            ]);

            $request->session()->forget('checkEmailSent');
            $request->session()->put('token', 'my-secret-token-1032017');

            return response()->json(['msg' => 'Your password is updated']);
        } catch (Exception $e) {
            return response()->json(['msg' => 'error']);
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('token');
        $request->session()->forget('locale');
        $request->session()->forget('checkEmailSent');
        return redirect('/adminAuth');
    }
}
