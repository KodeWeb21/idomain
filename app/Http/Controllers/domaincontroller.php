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
        $description = $req->description;
        $messageTest = json_encode(
            [
                "domains" => ["MyDomain.es","Lolos.com","other.do"],
                "message_send" => $description
            ]
            );
        echo $messageTest;
    }   
}
