<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::get('detail_booking/{id}', [LandingController::class, 'detail_booking'])->name('detail.booking.landing');
Route::get('booking/{id}', [LandingController::class, 'booking'])->name('booking.landing');
Route::get('detail/{id}', [LandingController::class, 'detail'])->name('detail.landing');
Route::get('explore', [LandingController::class, 'explore'])->name('explore.landing');
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

Route::get('/link', function () {
    Artisan::call('storage:link');
});
