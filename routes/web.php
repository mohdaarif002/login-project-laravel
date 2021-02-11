<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
  
    // if(Session::has('data')){
    //     print_r(Session::get('data'));

    // }
    
    return view('loginPage');
});

Route::get('singup',function(){
    return view('signupPage');
});

Route::post('login',[UserController::class,'login']);
Route::post('signup',[UserController::class,'signup']);

Route::group(['middleware'=>['loginCheck']],function(){
    Route::get('list',[UserController::class,'list']);
   
});

Route::get('logout',[UserController::class,'logout']);

