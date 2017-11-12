<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Specialty;
use TCG\Voyager\Models\Page;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::where('status', 1)->get();
        $specialties = Specialty::where('status', 1)->get();
        $page = Page::whereSlug('home')->first();

        $meta = [
            'title' => $page->meta_title,
            'description' => $page->meta_description,
            'keywords' => $page->meta_keywords,
        ];

        return view('welcome', compact('banners', 'specialties', 'page', 'meta'));
    }
}
