@extends('index')
@section('title', 'show')
@section('content')
    <style>
	tr{
		text-align: center;
	}
	.bi-trash{
		margin-left: 100px;
	}
</style>
	<a href="{{ route('students.index') }}" class="btn btn-secondary px-3 py-1 my-2 mx-2 ">Back</a>
	<table class="table table-striped table-hover table-bordered">
		<tr>
			<th colspan="2">
                <a href=""><img src="{{ asset('storage/' . $student->profile->file_name) }}" height="100"
                                width="100" style="border-radius:100px"></a>
				<br><a href="" onclick="return confirm('Do you want to delete')"><i class="bi bi-trash"></i></a>
			</th>
		</tr>
		<tr>
			<th>Father Name</th>
			<td>{{ $student->father_name }}</td>
		</tr>

		<tr>
			<th>Student Name</th>
			<td>{{ $student->student_name }}</td>
		</tr>

		<tr>
			<th>Admission No</th>
			<td>{{ $student->admission_no }}</td>
		</tr>

		<tr>
			<th>Grade</th>
			<td>
				{{ $student->grade }}
			</td>
		</tr>

		<tr>
			<th>NIC</th>
			<td>{{ $student->nic_no }}</td>
		</tr>

		<tr>
			<th>Birth Date</th>
			<td>{{ $student->date_of_birth }}</td>
		</tr>

		<tr>
			<th>Gender</th>
			<td>{{ $student->gender }}</td>
		</tr>

		<tr>
			<th>Phone No</th>
			<td>{{ $student->telephone_no }}</td>
		</tr>

		<tr>
			<th>Address</th>
			<td>{{ $student->address }}</td>
		</tr>
	</table>
@endsection
