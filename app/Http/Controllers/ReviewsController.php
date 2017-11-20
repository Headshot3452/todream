<?php

namespace App\Http\Controllers;

use App\Review;

class ReviewsController extends Controller
{
    public function list()
    {
        $reviews = Review::whereStatus(1)->orderBy('created_at', 'DESC')->get();

        return view('reviews', compact('reviews'));
    }
}
