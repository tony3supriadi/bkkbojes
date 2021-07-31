<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirectTo()
    {
        return redirect()->route('home');
    }

    public function index()
    {
        SEOTools::setTitle('Home');
        return view('pages.home');
    }
}
