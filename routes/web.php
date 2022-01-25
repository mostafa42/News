<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Middleware\check;
use App\Models\News;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adminAuth', function () {
    return view('admin.login');
});

Route::post('adminAuth' , [AuthController::class , 'login']);

Route::get('logout' , [AuthController::class , 'logout']);


Route::middleware([check::class])->group(function () {

    Route::get('/adminView', function () {
        return view('admin.adminAuth');
    });


    Route::resource('news', NewsController::class);

});
