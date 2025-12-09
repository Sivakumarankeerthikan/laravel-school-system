@extends('index')
@section('title', 'index')
@section('content')
    <table class="table table-striped table-hover table-bordered">
	<tr>
		<td colspan="16" class="text-center fs-3 fw-bold bg-info">
			Subject details
			<a href="{{ route('subjects.create') }}" class="float-end btn btn-success my-1 mx-2">Create
				subject</a>
		</td>
	</tr>
	<tr class="text-center">
		<th>Subject Name</th>
		<th>Subject Index</th>
		<th>Subject Order</th>
		<th>Subject Color</th>
		<th>Subject Number</th>
		<th colspan="3">Actions</th>
	</tr>

		<tr class="text-center">
            @foreach ($subjects as $subject)
			<td>{{ $subject->subject_name }}</td>
			<td>{{ $subject->subject_index }}</td>
			<td>{{$subject->subject_order}}</td>
			<td><input type="color" value="{{$subject->subject_color}}"></td>
			<td>{{$subject->subject_number}}</td>
			<td>
                <form action="{{ route('subjects.destroy',['subject'=>$subject->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Do you want to delete')">
                </form>
            </td>
			<td><a href="{{ route('subjects.edit', ['subject'=>$subject]) }}" class="btn btn-warning">Edit</a></td>
			<td><a href="{{ route('subjects.show',['subject'=>$subject->id]) }}" class="btn btn-info">Show</a></td>
		</tr>
        @endforeach
</table>
@endsection
