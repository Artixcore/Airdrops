<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'reffer' => ['nullable', 'string', 'max:255','sometimes'],
            'f_name' => ['nullable', 'string', 'max:255','sometimes'],
            'l_name' => ['nullable', 'string', 'max:255','sometimes'],
            'name'   => ['required', 'string', 'max:255'],
            'role'   => ['nullable', 'string', 'max:255','sometimes'],
            'phone'  => ['nullable', 'string', 'max:255','sometimes', 'unique:users'],
            'email'  => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // return Validator::make([
        //     'f_name' => 'nullable|string',
        //     'l_name' => 'nullable|string',
        //     'name' => 'required|string',
        //     'phone' => 'nullable|string',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:8',
        //     'role' => 'nullable|min:8',
        // ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([

            'reffer' => uniqid() ?? null,
            'f_name' => $data['f_name'] ?? null,
            'l_name' => $data['l_name'] ?? null,
            'name' => $data['name'],
            'phone' => $data['phone'] ?? null,
            'email' => $data['email'],
            'role' => $data['role'] ?? null,
            'password' => Hash::make($data['password']),

        ]);
    }

}
