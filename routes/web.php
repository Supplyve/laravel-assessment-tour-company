<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\TourController;
use App\Http\Livewire\ToursTable;
use App\Http\Livewire\Tours\Edit;
use Illuminate\Http\Request;
use App\Http\Livewire\Register;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TourDestroyController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

Route::get('/', [TourController::class, 'index']);
Route::get('/edit/{tour}', Edit::class)->name('touredit');
Route::get('/destroy/{tour}', TourDestroyController::class)->name('tourdestroy');