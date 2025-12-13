<?php

namespace App\Http\Controllers;

use App\Models\AddSubject;
use App\Models\Subject;
use Illuminate\Http\Request;

class AddsubjectController extends Controller
{
    public function showsubjects(string $id)
    {
        $subjects = Subject::all();
        return view('grade.addsubject', ['subjects'=>$subjects]);
    }

    public function store(Request $request)
    {
        foreach ($request->input('subjects') as $subject_id) {
            $subjects_store = new AddSubject();
            $subjects_store->grade_id = $request->input('grade_id');
            $subjects_store->subject_id = $subject_id;
            $subjects_store->save();
        }
        return redirect('/addsubject');
    }
}
