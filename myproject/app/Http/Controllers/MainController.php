<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use App\Services\FirstService;
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

    public function check(Request $request, FirstService $firstService) {
        $firstService->logic($request);
        return back()->with('success', 'Сообщение отправлено!');
    }


}
