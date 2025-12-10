@extends('index')
@section('title', 'edit')
@section('content')
<style>
    .img-input {
        margin-top: -18px;
    }
</style>
<div class="container d-flex justify-content-center">
    <div class="card mt-3 p-4 rounded-4">
        <div class="row">
            <form action="{{ route('students.update', ['student'=>$student]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h3 class="text-center">Student Form</h3>
                <div class="row mt-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Father Name" id="father_name"
                            name="father_name" value="{{ $student->father_name }}" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Student Name" id="student_name"
                            name="student_name" value="{{ $student->student_name }}" required>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Admission No" id="admission_no"
                            name="admission_no" value="{{ $student->admission_no }}" required>
                    </div>
                    <div class="col">
                        <select id="inputState" class="form-control" name="grade" id="grade">
                            <option selected>Choose Grade</option>
                            <option value="10A">10A</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="NIC" id="nic_no" name="nic_no" value="{{ $student->nic_no }}"
                            required>
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" placeholder="Date of Birth" id="date_of_birth"
                            name="date_of_birth" value="{{ $student->date_of_birth }}" required>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <select id="inputState" class="form-control" id="gender" name="gender" required>
                            <option selected>Choose Gender</option>
                            <option value="male" {{ $student->gender == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ $student->gender == 'female' ? 'selected' : '' }}>Female</option>
                            <option value="other" {{ $student->gender == 'other' ? 'selected' : '' }}>Other</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Telephone No" id="telephone_no"
                            name="telephone_no" value="{{ $student->telephone_no }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <textarea id="address" class="form-control" name="address" rows="4" placeholder="Address">{{ $student->address }}</textarea><br><br>
                    </div>
                </div>
                <div class="row mb-5 img-input">
                    <div class="col">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file"
                            id="file" accept="image/*" required>
                    </div>
                </div>
                <div class="row text-center mx-4 mt-1">
                    <div class="col">
                        <input type="reset" id="reset" value="Reset" class="btn btn-danger">
                    </div>
                    <div class="col">
                        <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                    <div class="col">
                        <input type="submit" id="submit" value="Update" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
