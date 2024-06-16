<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('user.index');
    }


    public function store(){

        $user = Auth::user();
        \request()->validate([
            'name' => 'required | string',
            'email' => 'email |required',
            'employer' => 'string |required'
        ]);

        $user->update([
            'name' => \request('name'),
            'email' => \request('email')
        ]);
        $user->employer->update([
            'name' => request('employer')
        ]);

        return redirect('/user');
    }

    public function show(User $user){
        if (!Auth::user()->admin)
            return redirect('/');

        return view('user.show',[
            'user' => $user
        ]);
    }

    public function update(User $user){

        if (!Auth::user()->admin)
            return redirect('/');

        \request()->validate([
            'name' => 'required |string',
            'email' => 'required |email',
            'employer' => 'required |string'
        ]);
        $admin = \request('admin');
        if ( $admin == null){
            $admin = 0;
        }
        $user->update([
            'name' => \request('name'),
            'email' => \request('email'),
            'admin' => $admin
        ]);
        $user->employer->update([
            'name' => \request('employer')
        ]);

        return redirect('user/'.$user->id);



    }
}
