<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class domaincontroller extends Controller
{
    public function generateDomain(Request $req){
       $req->validate(
            [
                "description"=>"required|min:3|filled"
            ]
        ); 
    }   
}
