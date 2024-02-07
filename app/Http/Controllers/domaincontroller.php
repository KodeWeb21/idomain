<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI;

class domaincontroller extends Controller
{
    public function generateDomain(Request $req){
       $req->validate(
            [
                "description"=>"required|min:3|filled"
            ]
        ); 
        $description = $req->description;
        $messageSystem = [
            1 => getenv("MESSAGE_SYSTEM"),
            2 => getenv("MESSAGE_SYSTEM2")
        ];
        $apiKey = getenv("API_KEY");
        $client = OpenAI::client($apiKey);

        $result = $client->chat()->create([
            'model' => 'gpt-3.5-turbo-1106',
            "response_format" => ["type"=>"json_object"],
            'messages' => [
                ['role' => 'system', 'content' => $messageSystem[1]],
                ['role'=> 'system', 'content' => $messageSystem[2]],
                ['role'=> 'user', 'content' => $description]
            ],
        ]);
        
        return $result->choices[0]->message->content;
    }   
}
