<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Violation;
use Illuminate\Support\Facades\Auth;

class ViolationController extends Controller
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
        if(Auth::user()->role=='admin')
        {}
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
            'violationType' => 'required'
        ]);
        //create post
        $violation = new Violation;
        $violation->violationTitle = $request->input('violationTitle');
        $violation->type = $request->input('violationType');
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
        $activelink='violations';
        $violation = Violation::find($id);
        
        return view('pages.violationView')
        ->with('activelink',$activelink)
        ->with('violation',$violation);

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
            'violationType' => 'required'
        ]);
        
        $violation = Violation::find($id);
      
        $violation->violationTitle = $request->input('violationTitle');
        $violation->type = $request->input('violationType');
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
