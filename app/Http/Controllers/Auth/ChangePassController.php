<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ChangePassController extends Controller
{

    public function updatePassword(Request $request)
    {
    $request->validate([
        'current_password' => 'required',
        'password' => 'required|confirmed|min:8',
    ]);

    $user = Auth::user();

    if (Hash::check($request->current_password, $user->password)) {
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('profile')->with('success', 'Password updated successfully!');
    }

    return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
    }
}
