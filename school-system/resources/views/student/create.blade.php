@extends('index')
@section('title', 'create')
@section('content')
<style>
    .img-input {
        margin-top: -18px;
    }
</style>
<div class="container d-flex justify-content-center">
    <div class="card mt-3 p-4 rounded-4">
        <div class="row">
            <form action="{{ url('students') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <h3 class="text-center">Student Form</h3>
                <div class="row mt-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Father Name" id="father_name"
                            name="father_name" required>
                        @error('father_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Student Name" id="student_name"
                            name="student_name" required>
                            @error('student_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Admission No" id="admission_no"
                            name="admission_no" required>
                        @error('admission_no')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <select id="inputState" class="form-control" name="grade" id="grade">
                            <option selected>Choose Grade</option>
                            @foreach ($grades as $grade)
                                <option value="{{ $grade->id }}">{{ $grade->grade_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="NIC" id="nic_no" name="nic_no"
                            required>
                        @error('nic_no')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" placeholder="Date of Birth" id="date_of_birth"
                            name="date_of_birth" required>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <select id="inputState" class="form-control" id="gender" name="gender" required>
                            <option selected>Choose Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Telephone No" id="telephone_no"
                            name="telephone_no">
                        @error('telephone_no')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <textarea id="address" class="form-control" name="address" rows="4" placeholder="Address"></textarea><br><br>
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
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
                        <input type="submit" id="submit" value="Submit" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
