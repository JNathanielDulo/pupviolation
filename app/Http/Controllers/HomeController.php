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

    public function users()
    {
        return view('pages.Users');
    }
    public function violations()
    {
        return view('pages.violations');
    }

    public function offenders()
    {
        return view('pages.offenders');
    }

    public function sanction_cleared()
    {
        return view('pages.sanction_cleared');
    }

    public function report_logs()
    {
        return view('pages.report_logs');
    }
}