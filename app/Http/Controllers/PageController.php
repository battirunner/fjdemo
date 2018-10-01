<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function contactSend()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|max:255',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $messages = request('message');
        $request = request();
        
        \Mail::send('emails.send', ['messages' => $messages], function($message) use ($request) {
            // User details attach
            $message->from($request->email, $request->name);

            // Send the email to following address
            $message->to(env('MAIL_SEND_TO', 'fahimmohip@gmail.com'));

            //Add a subject
            $message->subject($request->subject);
        });

        return redirect()->back()->with('message', 'Email has been sent successfully');
    }
}
