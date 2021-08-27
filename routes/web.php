<?php

use App\Http\Controllers\Compontent01Controller;
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

Route::view('/grid-test-001', 'grid-experiments.exp-001');
Route::view('/grid-test-002', 'grid-experiments.exp-002');
Route::view('/calendar-01', 'calendar.calendar-01');
Route::view('/calendar-02', 'calendar.calendar-02', ['title' => '2️⃣ Calendar Test 02: Modularizing?']);

Route::view('/components-01', 'components-tests.components-01');

Route::get('/components-02/{state?}', [Compontent01Controller::class, 'show']);
