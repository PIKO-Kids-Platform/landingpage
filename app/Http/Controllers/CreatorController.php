<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\User;

class CreatorController extends Controller
{
    //
    public function join(Request $request)
    {
     
        
        
        //check unique
        $validated = $request->validate([
            'email' => 'required|unique:users|max:255',            
        ]);

        $data=[
            'email'=> $request->email            
        ];

        User::create($data);

        // try {
        //     $data=[
        //         'email'=> $request->email            
        //     ];
    
        //     User::create($data);
        // } catch (Modelnot $exception) {

        //     return back()->withError($exception->getMessage())->withInput();

        // }
        
        
    }
}
