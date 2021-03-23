<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Violation;
use App\Models\ViolationSanctions;

class ViolationSanctionController extends Controller
{
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
        $this->validate($request,[
            'OrdinalOffensenumber' => 'required',
            'details' => 'required'
        ]);
        //create post
        $id = $request->input('violation_id');
        $sanction = new ViolationSanctions;
        $sanction->violation_id = $request->input('violation_id');
        $sanction->Offense = $request->input('OrdinalOffensenumber');
        $sanction->details = $request->input('details');
        $sanction->save();
        
        return redirect('violations/'.$id)->with('success', 'new Violation Added');
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
        $this->validate($request,[
            'editOrdinalOffensenumber' => 'required',
            'editdetails' => 'required'
        ]);
        //create post
         $violation_id = $request->input('violation_id');
        $sanction = ViolationSanctions::find($id);
        $sanction->violation_id = $request->input('violation_id');
        $sanction->Offense = $request->input('editOrdinalOffensenumber');
        $sanction->details = $request->input('editdetails');
        $sanction->save();
        
        return redirect('violations/'.$violation_id)->with('success', 'new Violation Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $violation = ViolationSanctions::find($id);
        $violation->delete();
        return redirect()->back()->with('success','item deleted');
        
        // return redirect('/violations')->with('success', 'Violation removed');
    }
}
