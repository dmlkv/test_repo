<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function blog() {
        return view('blog');
    }

    public function contacs() {
        return view('contacs');
    }

    public function price() {
        return view('price');
    }

    public function activities() {
        return view('activities');
    }

    public function check(Request $request) {
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:10|max:100',
            'message'=> 'required|min:10|max:500',
        ]);

        $contact = new ContactModel();
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('contacts');
    }

}
