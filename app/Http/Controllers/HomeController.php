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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function start()
    {
        return view('show');
    }
    public function catalog()
    {
        return view('page');
    }
    public function single_comics()
    {
        return view('page_1');
    }
    public function mape()
    {
        return view('map');
    }
    public function abo()
    {
        return view('about');
    }
}

