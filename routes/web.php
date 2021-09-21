<?php

use App\Models\Activity;
use App\Models\User;
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

Route::get('/{activity}', function (Activity $activity) {

    $activity->load('users');

    return view('welcome', compact(
        'activity'
    ));
});
