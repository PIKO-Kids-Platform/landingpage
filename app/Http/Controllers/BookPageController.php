<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;
use App\BookPage;

class BookPageController extends Controller
{
    //
    public function pagePathApi($id)
    {                     
        return $bookPage = BookPage::select('path')->find($id);                           
    }

    public function pageImageApi($id)
    {                     
        return $bookPage = BookPage::select('path')->find($id);                           
    }
}
