<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Offender;
use App\Models\Violation;

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

        $user = User::all();
        $usercount = count($user);
     

        $offendercount = Offender::all()->count('id');
        $violationcount = Violation::all()->count('id');




        $activelink='dashboard';

        return view('home')->with('activelink',$activelink)
        ->with('usercount',$usercount)
        ->with('offendercount',$offendercount)
        ->with('violationcount',$violationcount);
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
        $violations = Violation::all();
        $offenders = Offender::all();
        $activelink='report_logs';
        return view('pages.report_logs')
        ->with('activelink',$activelink)
        ->with('violations',$violations)
        ->with('offenders',$offenders);
        ;
    }
}