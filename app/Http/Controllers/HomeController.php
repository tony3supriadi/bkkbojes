<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\Testimonial;
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
        $daftarMitra = Mitra::orderBy('unggulan', 'DESC')
            ->orderBy('created_at', 'DESC')
            ->limit(4)
            ->get();

        $daftarTestimonial = Testimonial::select('bbk2_testimonial.*', 'fdf1_personal.photo')
            ->orderBy('created_at', 'DESC')
            ->join('fdf1_personal', 'fdf1_personal.id', '=', 'personal_id')
            ->limit(6)
            ->get();

        return view('pages.home', compact('daftarMitra', 'daftarTestimonial'));
    }
}
