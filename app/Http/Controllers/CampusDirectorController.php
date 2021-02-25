<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampusDirectorController extends Controller
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
        return view('campus_director');
    }

    public function violations()
    {
        return view('campus_director_pages.violations_cd');
    }

    public function offenders()
    {
        return view('campus_director_pages.offenders_cd');
    }

    public function sanction_cleared()
    {
        return view('campus_director_pages.sanction_cleared_cd');
    }
}
