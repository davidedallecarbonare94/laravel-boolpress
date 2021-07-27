<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class PageController extends Controller
{
    public function index(){
        return view('guests.welcome');
    }

    public function about(){
        return view('guests.about');
    }

    public function contacts(){
        return view('guests.contacts');
    }
    public function sendContactForm(Request $request){
        //Valido i dati
        $validateData = $request->validate([
            "full_name" => "required",
            "email" => "required | email",
            "message" => "required",
        ]);
        //Invio la Mail

        //visualizzazione senza invio
        //return (new ContactFormMail($validateData))->render();

        Mail::to('admin@test.com')->send(new ContactFormMail($validateData));
        return redirect()
        ->back()
        ->with('message', 'Success! Thank you for your email! Your reply will arrive in 48h!');
    }
}
