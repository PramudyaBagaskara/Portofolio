<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Mail\BlogEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(Request $req)
    {
        $data = array(
            'email' => $req->email );
           
        Mail::to($data['email'])->send(new BlogEmail($data));

        return back();
    }
}
