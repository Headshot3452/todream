<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;

class SpecialityController extends Controller
{
    /**
     * @param string $name
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(string $name = '')
    {
        $specialties = Post::active()->get();
        if (!$name && !empty($specialties)) {
            return redirect()->route('speciality', ['name' => $specialties->first()->slug]);
        }

        $currentSpecialty = Post::active()->whereSlug($name)->first();
        if (empty($currentSpecialty)) {
            abort(404);
        }
        $page = MenuItem::where('url', 'training-courses')->first();

        return view('speciality', compact('currentSpecialty', 'specialties', 'page', 'name'));
    }
}
