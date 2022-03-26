<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail;

class SendEmailController extends Controller
{
    public function send(Request $request){
        $data = [
            "sender" =>  $request->input("sender_mail"),
            "receiver" => $request->input("rcvr_mail"),
            "message" => $request->input("message")
        ];

        // Mail::send([], new TestMail($data), function($message) use ($data) {
        //     $message->from($data["sender"]);
        //     $message->to($data["receiver"])->subject("Test Purpose");
        // });

        Mail::to($data["sender"])->send(new TestMail($data));

        return redirect("submission");
    }
}
