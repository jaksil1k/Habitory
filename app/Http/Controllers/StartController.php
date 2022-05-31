<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StartController extends Controller
{
    public function home(){
        return view('home');
    }

    public function categories(){
        return view('categories');
    }

    public function contactForm(){
        return view('contact_form');
    }

    public function contactFormProcess(ContactFormRequest $request){
        Mail::to("nartai53@gmail.com")->send(new ContactForm($request->validated()));

        return redirect(route("contacts"));
    }
}
