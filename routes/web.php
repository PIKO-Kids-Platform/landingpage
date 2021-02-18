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

Route::get('/blog/list', function () {
    return view('blog-list');
})->name('blog.list');

Route::get('/blog/detail', function () {
    return view('blog-detail');
})->name('blog.detail');

Route::post('/join', 'CreatorController@join')->name('join');

Route::get('/download/invitation', function () {

    $file = public_path()."/files/creator invitation.pdf";
    $headers = array('Content-Type: application/pdf',);

    return Response::download($file, "PIKO Content Creator Invitation - Early Adopters Program.pdf", $headers);

})->name('download.invitation');


Route::get('/creator/list', 'CreatorController@list')->name('creator.list');


//API
Route::get('/creator/list/api', 'CreatorController@listApi')->name('creator.list.api');


Route::get('/book/page/{id}', 'BookPageController@pagePathApi')->name('book.page.api');

Route::get('test', function() {
    Storage::disk('google')->put('test.txt', 'Hello World');
});

Route::get('test/load', function() {
    return $contents = Storage::disk('google')->get('\Cover_0.png'); 
    
});


