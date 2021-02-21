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

Route::get('/blog/detail', function () {
    return view('blog-detail');
})->name('blog.detail');

Route::get('/creator/syaratdanketentuan', function () {
    $page = 'tos';
    return view('tos',["page"=>$page]);
})->name('tos');

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

Route::get('test/get', function() {
    $filename = 'Cover_0.png';

    $dir = '/';
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::disk('google')->listContents($dir, $recursive));

    $file = $contents
        ->where('type', '=', 'file')
        ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
        ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
        ->first(); // there can be duplicate file names!

    //return $file; // array with file info

    $rawData = Storage::disk('google')->get($file['path']);

    return response($rawData, 200)
        ->header('ContentType', $file['mimetype'])
        ->header('Content-Disposition', "attachment; filename='$filename'");
});

Route::get('test/list', function() {
    $dir = '/';
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::disk('google')->listContents($dir, $recursive));

    //return $contents->where('type', '=', 'dir'); // directories
    return $contents->where('type', '=', 'file'); // files
});

Route::get('test/load', function() {
    return $contents = Storage::disk('google')->allFiles();    
});

Route::get('test/stream', function() {
    // Use a stream to upload and download larger files
    // to avoid exceeding PHP's memory limit.

    // Thanks to @Arman8852's comment:
    // https://github.com/ivanvermeyen/laravel-google-drive-demo/issues/4#issuecomment-331625531
    // And this excellent explanation from Freek Van der Herten:
    // https://murze.be/2015/07/upload-large-files-to-s3-using-laravel-5/

    // Assume this is a large file...
    $filename = 'Cover_0.png';
    
    // Get file listing...
    $dir = '/';
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::disk('google')->listContents($dir, $recursive));

    // Get file details...
    $file = $contents
        ->where('type', '=', 'file')
        ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
        ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
        ->first(); // there can be duplicate file names!

    //return $file; // array with file info

    // Store the file locally...
    // $readStream = Storage::disk('google')->getDriver()->readStream($file['path']);
    // $targetFile = storage_path("downloaded-{$filename}");
    // file_put_contents($targetFile, stream_get_contents($readStream), FILE_APPEND);

    // Stream the file to the browser...
    $readStream = Storage::disk('google')->getDriver()->readStream($file['path']);

    return response()->stream(function () use ($readStream) {
        fpassthru($readStream);
    }, 200, [
        'Content-Type' => $file['mimetype'],
        //'Content-disposition' => 'attachment; filename="'.$filename.'"', // force download?
    ]);
});


