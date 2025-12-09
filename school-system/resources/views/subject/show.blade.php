@extends('index')
@section('title', 'show')
@section('content')
    <a href="{{ route('subjects.index') }}"> <input type="submit" id="submit" value="Back"></a>
	<table border="1">
		<tr>
		<th>ID</th>
		<th>Subject name</th>
		<th>Subject index</th>
		<th>Subject order</th>
		<th>Subject color</th>
		<th>Subject number</th>
		</tr>

        <tr>
            <td>{{$subject->id}}</td>
            <td>{{$subject->subject_name}}</td>
            <td>{{$subject->subject_index}}</td>
            <td>{{$subject->subject_order}}</td>
            <td><input type="color" value="{{$subject->subject_color}}"></td>
            <td>{{$subject->subject_number}}</td>
        </tr>
	</table>
@endsection
