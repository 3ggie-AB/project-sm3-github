<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index(){
        $users = Http::get('https://jsonplaceholder.typicode.com/users')->json();
        return view('users.index',compact('users'));
    }
    public function card(){
        $users = Http::get('https://jsonplaceholder.typicode.com/users')->json();
        return view('users.card',compact('users'));
    }
}
