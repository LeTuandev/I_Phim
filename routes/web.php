<?php

use App\Http\Controllers\Client\CommingSoonController;
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
    return redirect()->route('comming_soon');
});

Route::get('/comming-soon', [CommingSoonController::class, 'index'])->name('comming_soon');
