<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function index()
    {
        // Read text from the database
        $record = DB::table('chat')->first();

        // Emoticon conversion rules
        $emoticons = [
            ':))' => '1.png',
            ':3'  => '2.png',
            ':P'  => '3.png',
            ':C'  => '4.png',
            ';)'  => '5.png',
        ];

        // Explode the string into an array based on spaces
        $wordArray = explode(' ', $record->pesan);

        // Replace emoticons with corresponding images
        foreach ($wordArray as &$word) {
            if (array_key_exists($word, $emoticons)) {
                $word = '<img src="' . asset('' . $emoticons[$word]) . '" alt="' . $word . '" style="width:24px; height:24px;" />';
            }
        }

        // Implode the array back into a string
        $convertedText = implode(' ', $wordArray);

        return view('indexchat', ['convertedText' => $convertedText]);
    }
}
