<?php

namespace App\Http\Controllers;

use App\Banner;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::whereStatus(1)->get();
        $specialties = Post::whereStatus(1)->get();
        $page = Page::whereSlug('home')->first();

        $meta = (!empty($page)) ? $this->getMetaTags($page) : [];

        return view('welcome', compact('banners', 'specialties', 'page', 'meta'));
    }

    public function about()
    {
        $page = Page::whereSlug('about')->first();

        $meta = $this->getMetaTags($page);

        return view('text', compact('page', 'meta'));
    }

    public function contacts()
    {
        return view('contacts');
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
