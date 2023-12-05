<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        return view("song.index");
    }

    public function create()
    {
        $categories = Category::all();
        return view("song.add", ['categories' => $categories]);
    }
}
