@extends('index')
@section('title', 'edit')
@section('content')
<style>
    .card{
        width: 35rem;
        margin-top: 70px;
    }
</style>
<div class="container d-flex justify-content-center">
    <div class="card p-4 rounded-4">
        <div class="row">
            <form action="{{ url('grades/{id}') }}" method="post">
                @csrf
                @method('PUT')
                <h3 class="text-center">Grade Form</h3>
                <div class="row mt-4">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Grade Name" id="grade_name" name="grade_name" value="" required>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Grade Group" id="grade_group" name="grade_group" value="" required>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <input type="color" class="form-control" placeholder="Grade Color" id="grade_color" name="grade_color" value="" required>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Grade Order" id="grade_order" name="grade_order" value="" required>
                    </div>
                </div>
                <div class="row mt-5 mx-5">
                    <div class="col mx-5">
                        <a href="{{ url('/grades') }}" class="btn btn-secondary">Cancel</a>
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
