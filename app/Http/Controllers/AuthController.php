<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return response()->json(['message' => 'done']);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('token');
        return redirect('/adminAuth');
    }
}
