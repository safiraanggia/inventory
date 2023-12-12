<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileAdminController extends Controller
{
    public function index()
    {
    $user = User::findOrFail(Auth::id());

    return view('pages.admin.profile.profile', compact('user'));
    }

    public function update(Request $request, $id)
    {
    request()->validate([
        'name'       => 'required|string|min:2|max:100',
        'email'      => 'required|email|unique:users,email, ' . $id . ',id',
        'old_password' => 'nullable|string',
        'password' => 'nullable|required_with:old_password|string|confirmed|min:3'
    ]);

    $user = User::find($id);

    $user->name = $request->name;
    $user->email = $request->email;

    if ($request->filled('old_password')) {
        if (Hash::check($request->old_password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->password)
            ]);
        } else {
            return back()
                ->withErrors(['old_password' => __('Please enter the correct password')])
                ->withInput();
        }
    }

    $user->save();

    return back()->with('status', 'Profile updated!');
    }
}
