<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\App;
use App\User;
use Session;

class CreatorController extends Controller
{
    //
    public function join(Request $request)
    {
     
        
        App::setLocale("bahasa");
        //check unique
        $validated = $request->validate([
            'email' => 'required|unique:users|max:255',            
        ]);

        $data=[
            'email'=> $request->email            
        ];

        User::create($data);

        Session::flash('message', "Terimakasih email Kamu telah terdaftar, tunggu email balasan dari Kami ya!");
        return redirect()->back();
        
        
    }
}
