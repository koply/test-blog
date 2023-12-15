<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\View\View;

class BlogsController extends Controller
{
    // get /blogs
    public function index()
    {
        //return view("blogs");
        //$blogs = Blog::orderBy('id')->get();
        $entries = Blog::all();
        return view("blogs", compact("entries"));
    }

    // get for single /blogs/{id}
    public function show(string $id): View
    {
        return view('blogs', [
            'single' => true,
            'entry' => Blog::findOrFail($id)
        ]);
    }

}
