<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Profile;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $students = Student::all();
        // return view('student.index', ['students'=>$students]);
        $students = Student::with('profile')->get();
        return view('student.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grades = Grade::all();
        return view('student.create', ['grades' => $grades]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'father_name' => 'required|string|max:20',
            'student_name' => 'required|string|max:20',
            'admission_no' => 'required|string|max:5',
            'grade' => 'required|string',
            'nic_no' => 'required|max:12|min:11',
            'telephone_no' => 'required|max:12|min:10',
        ]);
        $profile = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('profiles', 'public');
            $profile = new Profile();
            $profile->file_name = $path; // stored path
            $profile->original_name = $file->getClientOriginalName();
            $profile->mime = $file->getClientMimeType();
            $profile->size = $file->getSize();
            $profile->save();
        }
        // $profile->created_by = $request->input();

        $student = new Student();
        $student->image_id = $profile ? $profile->id : null;
        $student->father_name = $validate['father_name'];
        $student->student_name = $validate['student_name'];
        $student->admission_no = $validate['admission_no'];
        $student->grade = $validate['grade'];
        $student->nic_no = $validate['nic_no'];
        $student->date_of_birth = $request->input('date_of_birth');
        $student->gender = $request->input('gender');
        $student->telephone_no = $validate['telephone_no'];
        $student->address = $request->input('address');
        $student->save();
        // $student->created_at = $request->input();
        return redirect('students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        $profile = Profile::find($id);
        return view('student.show', ['student' => $student, 'profile' => $profile]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('student.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        $student->father_name = $request->input('father_name');
        $student->student_name = $request->input('student_name');
        $student->admission_no = $request->input('admission_no');
        $student->grade = $request->input('grade');
        $student->nic_no = $request->input('nic_no');
        $student->date_of_birth = $request->input('date_of_birth');
        $student->gender = $request->input('gender');
        $student->telephone_no = $request->input('telephone_no');
        $student->address = $request->input('address');
        $student->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('students');
    }
}
