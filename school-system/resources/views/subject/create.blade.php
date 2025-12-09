@extends('index')
@section('title', 'create')
@section('content')
<style>
    .card{
        width: 35rem;
    }
</style>
<div class="container d-flex justify-content-center">
    <div class="card mt-4 p-4 rounded-4">
        <div class="row">
            <form action="{{ route('subjects.store') }}" method="post">
                @csrf
                @method('POST')
                <h3 class="text-center">Subject Form</h3>
                <div class="row mt-4">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Subject Name" id="subject_name" name="subject_name" required>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Subject Index" id="subject_index" name="subject_index" required>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Subject_Order" id="subject_order" name="subject_order" required>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <input type="color" class="form-control" placeholder="Subject Color" id="subject_color" name="subject_color" required>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Subject Number" id="subject_number" name="subject_number" required>
                    </div>
                </div>
                <div class="row mt-5 mx-5">
                    <div class="col mx-5">
                        <a href="{{ url('/subjects') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                    <div class="col mx-5">
                        <input type="submit" id="submit" value="Submit" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
