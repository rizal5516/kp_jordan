<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (auth()->user()->is_admin) {

            toastr()->success('Berhasil Masuk ke Halaman Admin');

            return view('admin.dashboard');
        } else {

            toastr()->success('Berhasil Masuk ke Halaman User');

            return view('user.dashboard');
        }
    }
}
