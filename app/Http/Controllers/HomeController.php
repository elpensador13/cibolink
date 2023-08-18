<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\establecimiento;

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
        $establecimientos = establecimiento::pluck ('user_id' , 'id');
        return view('home', ['establecimientos' => $establecimientos]);
    }
}
