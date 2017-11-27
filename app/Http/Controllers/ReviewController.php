<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Review;
use TCG\Voyager\Models\Page;

class ReviewController extends Controller
{
    public function list()
    {
        $reviews = Review::whereStatus(1)->orderBy('created_at', 'DESC')->get();
        $page = Page::whereSlug('about')->first();

        $meta = $this->getMetaTags($page);

        return view('reviews', compact('reviews', 'meta'));
    }

    /**
     * @param ReviewRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ReviewRequest $request)
    {
        Review::create($request->except('_token'));

        return redirect()->route('reviews');
    }
}
