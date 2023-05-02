<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'author' => ['required'],
            'body' => ['required'],
        ]);

        return Post::create($validated);
    }

    public function index()
    {
        return Post::all();
    }
}
