<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Offender;
use App\Models\Violation;
use App\Models\ViolationSanctions;

class SanctionClearedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $violations = Violation::all();
        $offenders = Offender::with('violationsCleared')->get();
        $activelink='SanctionCleared';
        
        return view('pages.sanction_cleared')
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offender = Offender::with('violationsCleared')->find($id);
        $offendergroupby = $offender->violations->groupBy('violationTitle');
        // dd($offendergroupby);
        

        // SELECT *, COUNT(violation_id) as occurances FROM `offender_violation` JOIN `violations` ON `offender_violation`.`violation_id` = `violations`.id WHERE offender_id = 1 GROUP BY violation_id ORDER BY violation_id asc
        $violationlist = DB::table('offender_violation')
                            ->leftJoin('violations','violations.id','offender_violation.violation_id')
                            ->select(DB::raw('violation_id,violationTitle, COUNT(violation_id) as occurances'))
                            ->where('offender_id','=',$id)
                            ->groupBy('violation_id','violationTitle')
                            ->orderByRaw('violation_id ASC')
                            ->get();
        // // dd($violationlist);
    
      
        $activelink='SanctionCleared';
        $violations = Violation::all();
        $violationSanctions = ViolationSanctions::all();
        
        return view('pages.sanction_cleared_view')
        ->with('activelink',$activelink)
        ->with('violations',$violations)
        ->with('offender',$offender)
        ->with('offendergroupby',$offendergroupby)
        ->with('violationSanctions',$violationSanctions)
        ->with('violationlist',$violationlist);
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
        $action = $request->action;
        $violation_id = $request->violation_id;
        $offender = Offender::find($id);
        if($action=='clear')
        {
            $offender->violationsPending()->updateExistingPivot($violation_id,['status' => 1,]);
            return redirect()->back()->with('success','Violation Cleared');
        }
        if($action == 'revert')
        {
            $res = $offender->violationsCleared()->updateExistingPivot($violation_id,['status' => 0,]);
            return redirect()->back()->with('success','Violation Reverted');
        }
        
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
