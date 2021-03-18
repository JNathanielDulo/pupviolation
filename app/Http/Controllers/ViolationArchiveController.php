<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Violation;

class ViolationArchiveController extends Controller
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
    public function show_deleted(){
        $violations = Violation::onlyTrashed()->paginate(10);
        $activelink='violations';
        return view('pages.violationArchive',compact('violations'))
        ->with('activelink',$activelink)
        ->with('i', (request()->input('page',1)-1)*10);
    }
    public function restoreDeletedViolation($id)
    {
        $violation = Violation::where('id',$id)->onlyTrashed()->first();
        $violation->restore();

        return redirect()->route('violations.index')
        ->with('success', 'Violation restored successfully');
    }
}
