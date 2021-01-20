<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CreatorController extends Controller
{
    //
    public function join()
    {
        $data=[
            'email'=> request("email")            
        ];

        User::create($data);
        
        return redirect('home')->with('popup', 'open');
        
        
    }
}
