<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function getMainRoute ( $lang ){
        session()->put('locale' , $lang);
        return redirect('/');
    }
}
