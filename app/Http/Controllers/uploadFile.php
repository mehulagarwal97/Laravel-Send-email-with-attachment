<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class uploadFile extends Controller
{
    public function upload(Request $request){
        $file_name = $request->file('file')->getClientOriginalName();
        $data = array('name' => $request->name);
        Mail::send('Mail/mail', $data, function ($message) use($request, $file_name){
            $message->from(env('MAIL_USERNAME'), 'John Doe');
            $message->to($request->email, 'John Doe');
            $message->subject('Mail using Laravel');
            $message->attach($request->file('file'),['as' => $file_name]);
        });
        return redirect()->route('confirmation_page');
    }

    public function confirmationPage(){
        return view('confirmation_page');
    }
}
