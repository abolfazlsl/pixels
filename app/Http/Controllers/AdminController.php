<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\True_;

class AdminController extends Controller
{


    public function show()
    {
        if (!Auth::user()->admin)
            return redirect('/');

        $users = User::latest()->with(['employer'])->where('email', '!=', Auth::user()->email)->paginate(12);
        return view('admin.index', ['users' => $users]);
    }


    public function update()
    {
        if (!Auth::user()->admin)
            return redirect('/');

        $user = Auth::user();

         \request()->validate([
            'name' => 'required | string',
            'email' => 'email |required'
        ]);

        $user->update([
            'name' => \request('name'),
            'email' => \request('email')
        ]);

        return redirect('/admin');

    }


}
