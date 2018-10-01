<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\mail\sendMail;
class mailagain extends Controller
{
    //
    public function send(){

        // Mail::send(new sendMail());
        return view('mail');

    }

    public function email(){
        
        return view('email');

    }
}
