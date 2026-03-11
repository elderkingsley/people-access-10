<?php

namespace App\Http\Controllers;

class MarketingController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function work()
    {
        return view('pages.work');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function careers()
    {
        return view('pages.careers');
    }
}
