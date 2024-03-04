<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// route group
Route::prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return 'Admin Dashboard';
    });
    Route::get('profile', function () {
        return 'Admin Profile';
    });
    Route::get('settings', function () {
        return 'Admin Settings';
    });
});

//middleware group

Route::get('months/{num}', function ($num) {
    if($num==1){
        return 'January';
    }
    else if($num==2){
        return 'February';
    }
    else if($num==3){
        return 'March';
    }
    else if($num==4){
        return 'April';
    }
    else if($num==5){
        return 'May';
    }



})->middleware('months');
