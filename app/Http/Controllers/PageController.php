<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function contactSend()
    {
        $request = request()->all();
        dd($request);
        \Mail::send('emails.contact', ['subject' => $subject, 'message' => $message], function($message) use ($request) {
            $message->from('me@gmail.com', 'Christian Nwamba');

            $message->to('chrisn@scotch.io');

            //Attach file
            $message->attach($attach);

            //Add a subject
            $message->subject("Hello from Scotch");
        });
    }
}
