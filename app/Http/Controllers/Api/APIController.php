<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PeminjamanRuangan;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function index()
    {
        $data = PeminjamanRuangan::get();

        return response()->json($data);
    }
}
