<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        return view("song.index");
    }

    public function create()
    {
        return view("song.add");
    }
}
