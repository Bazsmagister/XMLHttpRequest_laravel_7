<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function answertoget()
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

        $email = request('email');
        // dd($email);

        $lastuser->email = $email;
        $lastuser->save();
        // return ('email has changed');
        return view('welcome', compact('users'));
    }


    public function postit()
    {
        $users = User::all();

        $lastuser = User::all()->last();
        // dd($lastuser);

        $email = request('email');
        // dd($email);

        $lastuser->email = $email;
        $lastuser->save();
        //return ('email has changed');
        return response()->json($email);

        // onreadystatechange
    }

    public function index()
    {
        $users = User::all();
        return view('welcome', compact('users'));
    }
}
