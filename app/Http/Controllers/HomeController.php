<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Home');
        return view('pages.home');
    }
}
