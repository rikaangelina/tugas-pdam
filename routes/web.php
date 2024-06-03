<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');  
});

Route::get("angel", function (){
    echo "hello angel";
});

Route::post('pdam', [HomeController::class, 'pembayaran'])->name('pdam');
Route::get('formpdam', [HomeController::class, 'formpdam'])->name('formpdam');

?>