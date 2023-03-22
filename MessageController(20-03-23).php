<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Message;
use Illuminate\Http\Request;
use Mail;


class MessageController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form validation
        $request->validate([
            'name'   =>  'required|max:255',
            'email'   =>  'required|max:255',
            'phone'   =>  'required|max:255',
            // 'subject'   =>  'required|max:255',
            'message'   =>  'required|max:500',
            // 'contact_question'   =>  'required|integer',
            // 'captcha'   =>  'required',
        ]);

        // Get All Request
        $input = $request->all();

        // if ($input['null_value'] != "") {
        //     return redirect()->to('/'.'#contact')
        //         ->with('warning_contact', 'frontend.please_try_again');
        // }

        // if ($input['contact_question'] != $input['captcha']) {
        //     return redirect()->to('/'.'#contact')
        //         ->with('warning_contact', 'frontend.please_try_again');
        // }

        // Record to database
        Message::firstOrCreate([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            // 'subject' => $input['subject'],
            'message' => $input['message'],
        ]);
        
        $msg1 = "The following details are registered<br>";
        $msg1 .= "Name : ".$input['name']."<br>";
        $msg1 .= "Email : ".$input['email']."<br>";
        $msg1 .= "Phone : ".$input['phone']."<br>";
        $msg1 .= "Message : ".$input['message']."<br>";
        $data = [
          'content' => $msg1
        ];

        // dd($data);
        
        Mail::send('frontend.email.email-template', $data, function($message) use ($data) {
          $message->to('hello@bestfitcoach.in')
            ->subject('New Request has been raised');
        });
        // hello@bestfitcoach.in

        return redirect()->to('/'.'#contact')
            ->with('success_contact', 'frontend.your_message_has_been_delivered');
    }

}