<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/creator/list/api', 'CreatorController@listApi')->name('creator.list.api');


Route::get('/book/page/{id}', 'BookPageController@pagePathApi')->name('book.page.api');









Route::get('test', function() {
    Storage::disk('google')->put('test.txt', 'Hello World');
});

Route::get('test/get', function() {
    $filename = 'cover_0.jpg';

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

Route::get('api/load', function() {
    return $page = Storage::get('cover_0.jpg');    
});

Route::get('api/check/exist', function() {
    $exist = Storage::disk('google')->exists('cover_0.jpg');  
    return $exist;    
})->name('check.exist');

Route::get('test/stream', function() {
    // Use a stream to upload and download larger files
    // to avoid exceeding PHP's memory limit.

    // Thanks to @Arman8852's comment:
    // https://github.com/ivanvermeyen/laravel-google-drive-demo/issues/4#issuecomment-331625531
    // And this excellent explanation from Freek Van der Herten:
    // https://murze.be/2015/07/upload-large-files-to-s3-using-laravel-5/

    // Assume this is a large file...
    $folder = 'book-000001';
    $filename = 'cover_0.jpg';
    
    // Get file listing...
    $dir = 'book-000001';
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

Route::get('list-folder-contents', function() {
    // The human readable folder name to get the contents of...
    // For simplicity, this folder is assumed to exist in the root directory.
    $folder = 'book-000001';

    // Get root directory contents...
    $contents = collect(Storage::disk('google')->listContents('/', false));

    // Find the folder you are looking for...
    $dir = $contents->where('type', '=', 'dir')
        ->where('filename', '=', $folder)
        ->first(); // There could be duplicate directory names!

    if ( ! $dir) {
        return 'No such folder!';
    }

    // Get the files inside the folder...
    $files = collect(Storage::disk('google')->listContents($dir['path'], false))
        ->where('type', '=', 'file');

    // Stream the file to the browser...
    $readStream = Storage::disk('google')->getDriver()->readStream($files['path']);

    return response()->stream(function () use ($readStream) {
        fpassthru($readStream);
    }, 200, [
        'Content-Type' => $files['mimetype'],
        //'Content-disposition' => 'attachment; filename="'.$filename.'"', // force download?
    ]);
});
