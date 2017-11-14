<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Models\Specialty;
use TCG\Voyager\Models\Page;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::where('status', 1)->get();
//        $specialties = Specialty::where('status', 1)->get();
        $page = Page::whereSlug('home')->first();

        $meta = $this->getMetaTags($page);

        return view('test', compact('banners', 'page', 'meta'));
    }

    public function about()
    {
        $page = Page::whereSlug('about')->first();

        $meta = $this->getMetaTags($page);

        return view('text', compact('page', 'meta'));
    }

    /**
     * @param Page $page
     *
     * @return array
     */
    private function getMetaTags(Page $page): array
    {
        return [
            'title' => $page->meta_title,
            'description' => $page->meta_description,
            'keywords' => $page->meta_keywords,
        ];
    }
}
