<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Contactus;
use App\Mail\ContactMail;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{


    public function send_contact(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required'

          ]);

          $name=$req->name;
          $email=$req->email;
          $message=$req->message;

          $data=[
              'name'=>$name,
              'email'=>$email,
              'message'=>$message
          ];

          Contactus::create($data);



          $details=[
            'name'=>$name,
            'email'=>$email,
            'message'=>$message,
          ];
  

           // Mail::to('info@freesource.in')->send(new ContactMail($details));
            Mail::to('kalvinbenser000@gmail.com')->send(new ContactMail($details));
          return redirect()->back()->with('contact','Send Successfully');



    }



}
