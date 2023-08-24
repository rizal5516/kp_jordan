<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruangan;

class UserRuanganController extends Controller
{
    public function ruangan()
    {
        $ruangans = Ruangan::latest()->get();

        return view('user.ruangan.ruangan', compact('ruangans'));
    }

    public function detailRuangan($id)
    {
        $ruangan = Ruangan::findOrFail($id);

        return view('user.ruangan.detail_ruangan', compact('ruangan'));
    }
}
