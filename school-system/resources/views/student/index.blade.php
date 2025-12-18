@extends('index')
@section('title', 'index')
@section('content')
    <table class="table table-striped table-hover table-bordered" id="mytable">
	<thead>
		<tr class="sticky-top top-two">
			<td colspan="16" class="text-center fs-3 fw-bold bg-info">
				Students details
				<a href="{{ route('students.create') }}" class="float-end btn btn-success my-1 mx-2">Create student</a>
			</td>
		</tr>
		<tr class="text-center sticky-top top-three">
			<!--<th>ID</th>-->
			<th>Profile</th>
			<th>Father Name</th>
			<th>Student Name</th>
			<th>Admission No</th>
			<th>Grade</th>
			<th>NIC</th>
			<th>Birth Date</th>
			<th>Gender</th>
			<th>Phone</th>
			<th>Address</th>
			<th colspan="4">Actions</th>
		</tr>
	</thead>
	<tbody>
         @foreach ($students as $student)
			<tr class="text-center">
				<td>
                    <a href=""><img src="{{ asset('storage/'.$student->profile->file_name) }}" height="80" width="80"
							style="border-radius:100px"></a>
				</td>
				<td>
					{{ $student->father_name }}
				</td>
				<td>{{ $student->student_name }}</td>
				<td>{{ $student->admission_no }}</td>
				<td>
					{{ $student->gradeinfo->grade_name }}
				</td>
				<td>{{ $student->nic_no }}</td>
				<td>{{$student->date_of_birth}}</td>
				<td>{{$student->gender}}</td>
				<td>{{$student->telephone_no}}</td>
				<td>{{$student->address}}</td>

				<td>
                    <form action="{{ route('students.destroy', ['student'=> $student]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" onclick="return confirm('Do you want to delete')" class="btn btn-danger">
                    </form>
				</td>
				<td><a href="{{ route('students.edit', ['student'=>$student->id]) }}" class="btn btn-warning">Edit</a></td>
				<td><a href="{{ route('students.show', ['student'=>$student->id]) }}" class="btn btn-info">Show</a></td>
				<td><a href="#" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#addSubjectModal-{{ $student->id }}">Addsubjects</a></td>
			</tr>
			@endforeach
	</tbody>
</table>
@endsection
