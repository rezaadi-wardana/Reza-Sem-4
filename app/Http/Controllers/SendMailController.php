<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\SampleMail;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function index()
    {
        $content = [
            'subject' => 'This is the mail subject',
            'body' => 'This is the email body of how to send email from laravel 10 with mailtrap.'
        ];

        Mail::to('wardhana15.aw@gmail.com')->send(new SampleMail($content));

        return "Email has been sent.";
    }
}
