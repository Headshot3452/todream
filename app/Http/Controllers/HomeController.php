<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Specialty;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::where('status', 1)->get();
        $specialties = Specialty::where('status', 1)->get();

        return view('welcome', compact('banners', 'specialties'));
    }
}
