<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        return view('user.user_master');
    }

    public function editProfile(Request $request)
    {
        return view('user.user_edit', [
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

        return Redirect::route('user.edit')->with('status', 'profile-updated');
    }
}
