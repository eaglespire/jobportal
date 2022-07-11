<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function landing()
    {
        return view('frontend.pages.index');
    }
    public function about()
    {
        return view('frontend.pages.about');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
