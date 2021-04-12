<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send() {
    	$objDemo = new \stdClass();
    	$objDemo->demo_one = 'Demo one value';
    	$objDemo->demo_two = 'Demo two value';
    	$objDemo->sender = 'Medet Nurgaliyev';
    	$objDemo->receiver = 'Nurdaulet Kurmangazyuly';

    	Mail::to('190103385@stu.sdu.edu.kz')->send(new DemoEmail($objDemo));
    }
}
