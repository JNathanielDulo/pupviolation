<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Violation;

class ViolationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $violations = Violation::all();
        $activelink='violations';
        return view('pages.violations')
        ->with('activelink',$activelink)
        ->with('violations', $violations);
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
            'violationTitle' => 'required',
            'violationDetails' => 'required'
        ]);
        //create post
        $violation = new Violation;
        $violation->violationTitle = $request->input('violationTitle');
        $violation->disciplinarySanctions = $request->input('violationDetails');
        $violation->save();
        
        return redirect('/violations')->with('success', 'new Violation Added');
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
        
        $violation = Violation::find($id);

        return redirect('/violations')->with('success', 'Violation Saved');

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
            'violationTitle' => 'required',
            'violationDetails' => 'required'
        ]);
        
        $violation = Violation::find($id);
      
        $violation->violationTitle = $request->input('violationTitle');
        $violation->disciplinarySanctions = $request->input('violationDetails');
        $violation->save();
        
        return redirect('/violations')->with('success', 'Violation saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $violation = Violation::find($id);
        $violation->delete();
        return redirect('/violations')->with('success', 'Violation removed');
    }
    
}
