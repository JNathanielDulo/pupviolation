<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offender;
use App\Models\Violation;
use App\Mail\ViolationMail;
use Illuminate\Support\Facades\Mail;

class OffenderViolationController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->input('offender_id');
        $violationid = $request->input('violationid');
        $offender = Offender::find($id);
    
        
        
        $offender->violations()->attach($violationid);
        $offender->violations()->updateExistingPivot($violationid,['status' => 0]);
       
        $violation = Violation::find($violationid);

        $details = [
            'studentNumber'=>$offender->studentNumber,
            'name'=>$offender->name,
            'violationTitle'=>$violation->violationTitle,
            'date'=>$offender->created_at,
            'filedby'=>$offender->filedby
    
        ];
       
        Mail::to($offender->email)->send(new violationMail($details));

        $violations = Violation::all();
        $activelink='offenders';    

        return redirect('offenders/'.$id)
        ->with('activelink',$activelink)
        ->with('violations',$violations);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
