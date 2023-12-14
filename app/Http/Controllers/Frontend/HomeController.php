<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $allSong = DB::table('song')->where('status',1)->get();
        return view('frontend.home.list', ['songs' => $allSong]);
    }
}
