<?php
use App\Http\Controllers\taskController;
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

Route::get('/registeruser', [taskController::class,'getdata']);
Route::get('/registid', [taskController::class,'getid']);
// Route::get('/', function () {
//     return view('welcome');
// });
