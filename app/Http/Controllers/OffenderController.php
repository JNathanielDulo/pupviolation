<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Violation;
use App\Models\Offender;

class OffenderController extends Controller
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
        $violations = Violation::all();
        $offenders = Offender::all();
        $activelink='offenders';
        
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
            'contactNum' => 'required'
        ]);
        //create
        //check if it exist
        //if it exist tag new violation
        //else new entry

        // $offender = Offender::firstOrNew(
        //     ['studentNumber' => $request->input('studentNumber')],
        //     ['name' => $request->input('studentName')]
        // );
            $offender = Offender::where('studentNumber','=',$request->input('studentNumber'))
            ->where('name','=',$request->input('studentName'))
            ->first();
        if($offender){
            $offender->save();
            return redirect()->route('offenders.index')->with('success','offender already exists:'.$request->input('studentNumber').'/'.$request->input('studentName'));
        }else{
         $offender = new offender;
         $offender->filedby = $request->input('filedby');
            $offender->studentNumber = $request->input('studentNumber');
            $offender->name = $request->input('studentName');
            $offender->email = $request->input('studentEmail');
            $offender->course = $request->input('studentCourse');
            $offender->contactnum = $request->input('contactNum');
        $offender->save();
       
       
        return redirect()->route('offenders.index')->with('success', 'new offender Added');
        }
        
        
    
        
        
        

    
        //    $offender->save();
            // return redirect()->route('offenders.index')->with('success','offender already exists:'.$request->input('studentNumber').'/'.$request->input('studentName'));
        
        
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //display violation of the given offender id
        //and show it on the offender/{id}
        


        //match the violation_id then find the matching sanction details via ordinal offense.








        $offender = Offender::find($id);
        $collection = $offender->violations->countBy('violationTitle');
        
        

        // SELECT *, COUNT(violation_id) as occurances FROM `offender_violation` JOIN `violations` ON `offender_violation`.`violation_id` = `violations`.id WHERE offender_id = 1 GROUP BY violation_id ORDER BY violation_id asc
        $violationlist = DB::table('offender_violation')
                            ->leftJoin('violations','violations.id','offender_violation.violation_id')
                            ->select(DB::raw('violation_id,violationTitle, COUNT(violation_id) as occurances'))
                            ->where('offender_id','=',$id)
                            ->groupBy('violation_id','violationTitle')
                            ->orderByRaw('violation_id ASC')
                            ->get();
        // // dd($violationlist);

      

        $violations = Violation::all();
        

        // foreach($violations as $violation)
        // {
        //     echo "title:".$violation->violationTitle."<br>";
        //     foreach ($violation->violationSanctions as $sanction) {
        //         echo "offense:".$sanction->offense."<br>";
        //         echo "details:".$sanction->details."<br>";
        //     }
        // }
        
        $activelink='offenders';
        
        // dd(count($offender->violations));
        return view('pages.offenderview')
        ->with('activelink',$activelink)
        ->with('violations',$violations)
        ->with('offender',$offender)
        ->with('collection',$collection)
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
            'studentNumber' => 'required',
            'studentName' => 'required',
            'studentCourse' => 'required',
            'studentEmail' => 'required',
            'contactNum' => 'required'
        ]);

        $offender = Offender::find($id);
        $offender->filedby = $request->input('filedby');
        $offender->studentNumber = $request->input('studentNumber');
        $offender->name = $request->input('studentName');
        $offender->email = $request->input('studentEmail');
        $offender->course = $request->input('studentCourse');
        $offender->contactnum = $request->input('contactNum');
        $offender->save();

        return redirect('/offenders')->with('success', 'Offender Updated');
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
