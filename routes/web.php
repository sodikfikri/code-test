<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DsbController;

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
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::post('/loginapi', [DsbController::class, 'login']); 

Route::get('/list', [DsbController::class, 'list']); 
Route::post('/create', [DsbController::class, 'create']); 
Route::get('/detail', [DsbController::class, 'detail']); 
Route::put('/update', [DsbController::class, 'update']); 
Route::delete('/delete', [DsbController::class, 'delete']); 
