<?php

use Illuminate\Support\Facades\Route;

// front ( landing )
use App\Http\Controllers\Landing\LandingController;

// member ( dashboard )
use App\Http\Controllers\Dashboard\MemberController;
use App\Http\Controllers\Dashboard\ServiceController;

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

Route::resource('/', LandingController::class);

Route::group(['prefix' => 'member', 'as' => 'member.', 'middleware' => ['auth:sanctum', 'verified']], function () {

    // dashboard
    Route::resource('dashboard', MemberController::class);

    // service
    Route::resource('service', ServiceController::class);
});

// Route::get('/', function () {
//     return view('welcome');
// });