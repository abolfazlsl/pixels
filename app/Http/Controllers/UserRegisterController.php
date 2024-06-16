<?php

namespace App\Http\Controllers;

use App\Models\employer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class UserRegisterController extends Controller
{

    public function index()
    {
        return view('auth.register');
    }



    public function store(Request $request)
    {
        $userAt = $request->validate([
            'name' => ['string', 'required', 'min:3', 'max:30'],
            'email' => ['required', 'email', 'min:10', 'max:40', 'unique:users,email'],
            'password' => ['confirmed', 'required', Password::min(6)->max(20)]
        ]);
        $employerAt = $request->validate([
            'employer' => ['string', 'required', 'max:100'],
            'logo' => ['image', File::types(['png', 'jpeg', 'jpg'])]
        ]);
        $user = User::create($userAt);

        $logoPath = $employerAt['logo']->store('logos');

        employer::create([
            'user_id' => $user->id,
            'name' => $employerAt['employer'],
            'logo' => $logoPath
        ]);

        Auth::login($user);


        return redirect('/');

    }


}
