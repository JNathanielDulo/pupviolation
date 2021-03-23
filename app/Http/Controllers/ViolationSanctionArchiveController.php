<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ViolationSanctions;
use App\Models\Violation;

class ViolationSanctionArchiveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show_deleted($id){
        $violation_id =$id;
        $violation = Violation::find($id);
        $violations = $violation->violationSanctions()->onlyTrashed()->get();
       
       
    
        $activelink='violations';
        return view('pages.violationSanctionArchive')
        ->with('activelink',$activelink)
        ->with('violations',$violations)
        ->with('violation_id',$violation_id);
    }
    public function restoreDeletedViolation($id)
    {
        $violation = ViolationSanctions::where('id',$id)->onlyTrashed()->first();
        $violation_id = $violation->violation_id;
        $violation->restore();
        

        return redirect()->route('violations.show',$violation_id)
        ->with('success', 'Violation Sanction restored successfully');
    }
}
