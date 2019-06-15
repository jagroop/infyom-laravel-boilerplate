<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:dashboard');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stats = [
          'users' => \App\Models\User::count(),
          // 'posts' => \App\Models\Post::count(),
          'pages' => \App\Models\Page::count(),
        ];
        return view('home', compact('stats'));
    }
}
