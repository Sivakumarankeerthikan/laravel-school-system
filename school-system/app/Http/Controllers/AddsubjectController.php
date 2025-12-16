<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Grade_Subject;
use App\Models\Subject;
use Illuminate\Http\Request;

class AddsubjectController extends Controller
{
    // public function showsubjects(string $id)
    // {

    //     $grade = Grade::find($id);
    //     return view('grade.addsubject', ['subjects'=>$subjects, 'grade'=>$grade]);
    // }

    // public function store(Request $request)
    // {
    //     foreach ($request->input('subjects') as $subject_id) {
    //         $subjects_store = new Grade_Subject();
    //         $subjects_store->grade_id = $request->input('grade_id');
    //         $subjects_store->subject_id = $subject_id;
    //         $subjects_store->save();
    //     }
    //     return redirect('/addsubject');
    // }
}
