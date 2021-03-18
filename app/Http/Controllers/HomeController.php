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
        $activelink='dashboard';

        return view('home')->with('activelink',$activelink);
    }

    public function users()
    {
        $activelink='users';   
        return view('pages.Users')->with('activelink',$activelink);;
    }
    public function violations()
    {
        $activelink='violations';
        return view('pages.violations')->with('activelink',$activelink);;
    }

    public function offenders()
    {
        $activelink='offenders';
        return view('pages.offenders')->with('activelink',$activelink);;
    }

    public function sanction_cleared()
    {
        $activelink='saction_cleared';
        return view('pages.sanction_cleared')->with('activelink',$activelink);;
    }

    public function report_logs()
    {
        $activelink='report_logs';
        return view('pages.report_logs')->with('activelink',$activelink);;
    }
}