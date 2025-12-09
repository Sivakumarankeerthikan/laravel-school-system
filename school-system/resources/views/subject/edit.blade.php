@extends('index')
@section('title', 'edit')
@section('content')
<style>
    .card{
        width: 35rem;
    }
</style>
<div class="container d-flex justify-content-center">
    <div class="card mt-4 p-4 rounded-4">
        <div class="row">
            <form action="{{ route('subjects.update',['subject'=>$subject->id]) }}" method="post">
                @csrf
                @method('PUT')
                <h3 class="text-center">Subject Form</h3>
                <div class="row mt-4">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Subject Name" id="subject_name" name="subject_name" value="{{ $subject->subject_name }}" required>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Subject Index" id="subject_index" name="subject_index" value="{{ $subject->subject_index }}" required>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Subject_Order" id="subject_order" name="subject_order" value="{{ $subject->subject_order }}" required>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <input type="color" class="form-control" placeholder="Subject Color" id="subject_color" name="subject_color" value="{{ $subject->subject_color }}" required>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Subject Number" id="subject_number" name="subject_number" value="{{ $subject->subject_number }}" required>
                    </div>
                </div>
                <div class="row mt-5 mx-5">
                    <div class="col mx-5">
                        <a href="{{ route('subjects.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                    <div class="col mx-5">
                        <input type="submit" id="submit" value="Update" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
