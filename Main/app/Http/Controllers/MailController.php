<?php

namespace App\Http\Controllers;
use App\Mail\TestMail; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function sendMail()
    {
        $details = [
            'title' => 'Reminder from IEMRS',
            'body' => 'reminder to get appointment'
        ];
        Mail::to("mirzamoiz65@gmail.com")->send(new testMail($details));
    }
}
