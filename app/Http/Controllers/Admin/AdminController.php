<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Affiliate;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function profile()
    {
        return view('admin.profile.profile');
    }

    public function edit_profile(Request $request, $id)
    {

        $path = "Avatar";
        $avatar = time() . "." . $request->file("avatar")->extension();
        $file = $request->file('avatar');
        $file->storeAs($path, $avatar, 'local');

        $user = User::find($id);

        $user->avatar = $avatar;
        $user->f_name = $request->f_name;
        $user->l_name = $request->l_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        return redirect()->back()->with('success', 'Avatar Uploaded');
    }

    public function manager_roles()
    {
        return view('admin.Roles.manager');
    }

    public function ads_roles()
    {
        return view('admin.Roles.ad');
    }

    public function tutor_roles()
    {
        return view('admin.Roles.tutor');
    }

    public function add_manager_role(Request $request)
    {

        // Create the user
        $user = User::create([
            // 'avatar' => $request->input($avatar),
            'f_name' => $request->input('f_name'),
            'l_name' => $request->input('l_name'),
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => $request->input('role'),
        ]);

        // Redirect back or to a success page
        return redirect()->back()->with('success', 'User created successfully!');
    }

    public function affiliate()
    {
        return view('admin.affiliate.affiliate');
    }

    public function create_aff(Request $request)
    {
        $aff = new Affiliate();

        $aff->user_id = Auth::user()->id;
        $aff->product_id = $request->product_id;
        $aff->course_id = $request->course_id;
        $aff->for = $request->for;
        $aff->email = $request->email;
        $aff->amount = $request->amount;
        $aff->code = "A" . uniqid();

        $aff->save();

        return redirect()->back()->with('success', 'Affiliate Added');
    }
}
