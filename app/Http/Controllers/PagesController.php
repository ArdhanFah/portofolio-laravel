<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Mail;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class PagesController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function postAbout(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'message' => 'min:5'
        ]);

        $data = array(
            'bodyEmail'   => $request->email,
            'bodyMessage' => $request->message
        );

        Mail::send('emails.contact', $data, function($emailHeader) use ($data){
            $emailHeader->from('ardhandikri04@gmail.com');
            $emailHeader->replyTo($data['bodyEmail']);
            $emailHeader->sender($data['bodyEmail']);
            $emailHeader->to('ardhandikri04@gmail.com');
            $emailHeader->subject('ArdhanFah Contact Form Submission');
        });

        return Redirect::to(URL::previous() . "#contact")->with('success', 'Your message has been received — I usually respond within 24 hours!');
    }

    public function my_work()
    {
        return view('my-work');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function my_blog()
    {
        return view('my-blog');
    }
}