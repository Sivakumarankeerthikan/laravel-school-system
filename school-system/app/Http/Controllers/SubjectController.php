<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('subject.index', ['subjects'=>$subjects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subjects = new Subject();
        $subjects->subject_name = $request->input('subject_name');
        $subjects->subject_index = $request->input('subject_index');
        $subjects->subject_order = $request->input('subject_order');
        $subjects->subject_color = $request->input('subject_color');
        $subjects->subject_number = $request->input('subject_number');
        $subjects->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subject = Subject::find($id);
        return view('subject.show',['subject'=>$subject]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subject = Subject::find($id);
        return view('subject.edit', ['subject'=>$subject]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subject = Subject::find($id);
        $subject->subject_name = $request->input('subject_name');
        $subject->subject_index = $request->input('subject_index');
        $subject->subject_order = $request->input('subject_order');
        $subject->subject_color = $request->input('subject_color');
        $subject->subject_number = $request->input('subject_number');
        $subject->save();
        return redirect('subjects');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subject = Subject::find($id);
        $subject->delete();
        return redirect('subjects');
    }
}
