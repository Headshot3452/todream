<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactShipped;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $banners = Banner::whereStatus(1)->get();
        $specialties = Post::whereStatus(1)->get();
        $page = Page::whereSlug('home')->first();

        $meta = (!empty($page)) ? $this->getMetaTags($page) : [];

        return view('welcome', compact('banners', 'specialties', 'page', 'meta'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        $page = Page::whereSlug('about')->first();
        $meta = $this->getMetaTags($page);

        return view('text', compact('page', 'meta'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contacts()
    {
        $page = Page::whereSlug('contacts')->first();
        $meta = $this->getMetaTags($page);

        return view('contacts', compact('meta'));
    }

    /**
     * @param ContactRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sendMail(ContactRequest $request)
    {
        $data = $request->all();
        \Mail::to(setting('site.email'))->send(new ContactShipped($data));

        return view('contacts');
    }
}
