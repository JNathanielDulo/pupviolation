<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Violation;
use App\Models\Offender;

class OffenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $violations = Violation::all();
        $offenders = Offender::all();
        $activelink='offenders';
        // return $violations[0];

        return view('pages.offenders')
        ->with('activelink',$activelink)
        ->with('violations',$violations)
        ->with('offenders',$offenders);
  
        
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
        $this->validate($request,[
            'studentNumber' => 'required',
            'studentName' => 'required',
            'studentCourse' => 'required',
            'studentEmail' => 'required',
            'violationid' => 'required',
            'contactNum' => 'required'
        ]);
        //create post
        $offender = new Offender;
        $offender->filedby = $request->input('filedby');
        $offender->studentNumber = $request->input('studentNumber');
        $offender->name = $request->input('studentName');
        $offender->email = $request->input('studentEmail');
        $offender->course = $request->input('studentCourse');
        $offender->contactnum = $request->input('contactNum');
        $offender->violationid = $request->input('violationid');
        
        $offender->save();
        
        return redirect('/offenders')->with('success', 'new offender Added');
    
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
