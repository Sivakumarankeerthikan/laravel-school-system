@extends('index')
@section('title', 'show')
@section('content')
    <a href="{{ route('grades.index') }}"> <input type="submit" id="submit" value="Back"></a>
	<table border="1">
		<tr>
		<th>ID</th>
		<th>Grade_name</th>
		<th>Grade_group</th>
		<th>Grade_color</th>
		<th>Grade_order</th>
		<th>Created_at</th>
		<th>Created_by</th>
		<th>Updated_at</th>
		<th>Updated_by</th>
		<th>deleted_at</th>
		<th>deleted_by</th>
		</tr>

			<tr>
			<td>{{$grade->id}}</td>
			<td>{{$grade->grade_name}}</td>
			<td>{{$grade->grade_group}}</td>
			<td><input type="color" value="{{$grade->grade_color}}"></td>
			<td>{{$grade->grade_order}}</td>
			<td>{{$grade->created_at}}</td>

			<td>{{$grade->updated_at}}</td>
			</tr>
	</table>
@endsection
