<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Events;

class UserController extends Controller
{
    public function index()
    {
      $users = User::all();
      return view('profiles', compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('profile', compact('user'));
    }
    public function index2($id)
    {
        $user = User::find($id);

        return view('profileAbout', compact('user'));
    }
    public function show2()
    {
      //$users = User::all();
      $users = User::find('1');
      $events = Events::all();
      return view('profileAbout', compact('users', 'events'));
    }
    public function showProfile()
    {
      $users = User::find('1');
      $events = Events::all();
      return view('profileMain', compact('users', 'events'));
    }
}
