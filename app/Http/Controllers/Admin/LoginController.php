<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        // hien thi view(giao dien) cho nguoi dung
        return view("login.index");
    }

    public function login(Request $request)
    {
        dd($request->all());
        return "Method post Login";
    }
}
