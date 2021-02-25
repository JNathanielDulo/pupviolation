<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuardController extends Controller
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
        return view('guard');
    }


    public function violations()
    {
        return view('guard_pages.violations_g');
    }

    public function offenders()
    {
        return view('guard_pages.offenders_g');
    }

    public function sanction_cleared()
    {
        return view('guard_pages.sanction_cleared_g');
    }
}
