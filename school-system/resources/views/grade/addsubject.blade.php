@extends('index')
@section('title', 'addsubject')
@section('content')
<a href="{{ route('grades.index') }}"> <input type="submit" id="submit" value="Back"></a>
<form action="{{ route('store') }}" method="post">
    @csrf
    @method('POST')
    <label>Select Your Subjects</label><br>
    @foreach ($subjects as $subject)
    <input type="text" name="grade_id" id="grade_id" value="" hidden>
    <input type="checkbox" name="subjects[]" value="{{ $subject->id }}">
    <label>{{ $subject->subject_name }}</label><br>
    @endforeach
    <br>
    <input type="submit" value="Submit">
</form>
@endsection


