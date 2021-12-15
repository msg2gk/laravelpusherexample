<?php

use Illuminate\Support\Facades\Route;
use Pusher\Laravel\Facades\Pusher;
use Illuminate\Support\Facades\Broadcast;
use App\Http\Controllers\Notification;

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

Route::get('send',[Notification::class, 'index']);


