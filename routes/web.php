<?php

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
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/join', 'CreatorController@join')->name('join');

Route::get('/download/invitation', function () {

    $file = public_path()."/files/creator invitation.pdf";
    $headers = array('Content-Type: application/pdf',);

    return Response::download($file, "PIKO Content Creator Invitation - Early Adopters Program.pdf", $headers);

})->name('download.invitation');
