<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class TodoController extends Controller
{
    public function index(){
        $todos = Http::get('https://jsonplaceholder.typicode.com/todos')->json();
        return view('todos.index',compact('todos'));
    }
    public function card(){
        $todos = Http::get('https://jsonplaceholder.typicode.com/todos')->json();
        return view('todos.card',compact('todos'));
    }
}
