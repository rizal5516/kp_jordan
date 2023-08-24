<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function editProfile(Request $request)
    {
        return view('admin.admin_edit', [
            'user' => $request->user(),
        ]);
    }

    public function updateProfile(ProfileUpdateRequest $request)
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('admin.edit')->with('status', 'profile-updated');
    }

    public function pemohon()
    {
        return view('admin.pemohon.pemohon');
    }

    public function peminjaman()
    {
        return view('admin.peminjaman.peminjaman');
    }
}
