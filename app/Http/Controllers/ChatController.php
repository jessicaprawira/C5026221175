<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ChatController extends Controller
{
	public function index()
	{
    	// mengambil data dari table
		$chat = DB::table('chat')->get();
    	//convert emot
        $emoticons = [
            ':))' => '/assets/1.png',
            ':3'  => '/assets/2.png',
            ':P'  => '/assets/3.png',
            ':C'  => '/assets/4.png',
            ';)'  => '/assets/5.png',
        ];

        // Explode pesan
        $pesanarray = explode(",",$chat);

        // Implode the array back into a string
        $convertedText = implode(' ', $pesanarray);

        foreach ($pesanarray as $word) {
            $convertedText .= array_key_exists($word, $emoticons) ? $emoticons[$word] : $word;
            $convertedText .= ' ';
        }

        return view('indexchat', ['convertedText' => $convertedText]);
    }

}
