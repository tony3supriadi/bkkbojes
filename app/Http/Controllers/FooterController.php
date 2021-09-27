<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    function index()
    {
        Link::all();

    }
}
