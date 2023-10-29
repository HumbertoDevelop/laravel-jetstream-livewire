<?php

use App\Http\Controllers\PdfController;
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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/pdfFile/{id}',[PdfController::class,'pdfFile']);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard')->middleware('user');
    Route::get('/my-dashboard', function () {
        return view('my-dashboard');
    })->name('dashboard');
});
