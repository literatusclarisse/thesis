<?php

namespace App\Http\Controllers;

use App\Prisoner;
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
        $prisoners = Prisoner::where('user_id',auth()->user()->id)->get();
        $prisoners_all = Prisoner::get();

        return view('home',compact(['prisoners','prisoners_all']));
    }
}
