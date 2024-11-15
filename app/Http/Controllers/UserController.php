<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function answerToGet()
    {
        $firstuser = User::first();
        //dd($user);
        return $firstuser->email;
    }

    public function post()
    {
        $users = User::all();

        $lastuser = User::all()->last();
        // dd($lastuser);

        $email = request('email') ?? 'defaultEmail@demail.com';
        // dd($email);

        $lastuser->email = $email;
        $lastuser->save();
        // return ('email has changed');
        // return view('welcome', compact('users'));
        return redirect('');
    }


    public function postIt()
    {
        $users = User::all();

        $lastuser = User::all()->last();
        // dd($lastuser);

        $email = request('email') ?? 'defaultEmail';
        // dd($email);

        $lastuser->email = $email;
        $lastuser->save();
        //return ('email has changed');

        // return redirect()->back();
        // return redirect()->back()->with('users', $users);

        // return redirect('/')->with('email');

        return response()->json($email);

        // $resp = response()->json($lastuser);
        // return view('welcome', compact('users', 'resp'));
    }

    public function index()
    {
        $users = User::all();
        return view('welcome', compact('users'));
    }
}
