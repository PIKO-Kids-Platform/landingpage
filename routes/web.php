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
Auth::routes();

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog/list', 'ArticleController@list')->name('blog.list');
Route::get('/blog/detail/{id}', 'ArticleController@show')->name('blog.detail.show');

Route::get('/creator/syaratdanketentuan', function () {    
    return view('tos');
})->name('tos');

Route::post('/join', 'CreatorController@join')->name('join');

// Route::get('/download/invitation', function () {

//     $file = public_path()."/files/creator invitation.pdf";
//     $headers = array('Content-Type: application/pdf',);

//     return Response::download($file, "PIKO Content Creator Invitation - Early Adopters Program.pdf", $headers);

// })->name('download.invitation');


Route::get('/creator/list', 'CreatorController@list')->name('creator.list');

include('api.php');


