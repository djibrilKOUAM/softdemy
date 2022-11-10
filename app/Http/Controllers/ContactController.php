<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function SendMails(Request $req)
    {
        $data=[
            'name' =>$req->name,
            'email' =>$req->email,
            'subject' =>$req->subject,
            'message' =>$req->message,
        ];

        Mail::to('rendezvous@kfnewbusiness.com')->send(new contactMail($data));
        Toastr::success("Thanks you for this message");
        return back();

    }
}
