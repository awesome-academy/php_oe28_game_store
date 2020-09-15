<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function changeLanguage($lang)
    {
        Session::put('lang', $lang);
    	        
        return redirect()->back();
    }
}
