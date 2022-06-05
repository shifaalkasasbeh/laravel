<?php
use App\Http\Controllers\taskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\show;
use App\Http\Controllers\CalculatorController;
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
//task 1/6
// Route::get('/registeruser', [taskController::class,'getdata']);
// Route::get('/registid', [taskController::class,'getid']);
// Route::get('/', function () {
//     return view('welcome');
// });

//task2/6 testgroup

//Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });


Route::get('/home', [show::class,'home']);
Route::get('/about', [show::class,'about']);
Route::get('/calculator',[CalculatorController::class,'calculate']);
