<?php
use App\Http\Controllers\ItcController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/tabel-data',[ItcController::class,'liattabel']);

Route::get('/form',[ItcController::class,'liatform']);




