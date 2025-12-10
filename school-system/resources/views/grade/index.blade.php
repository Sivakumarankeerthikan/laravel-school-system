@extends('index')
@section('title', 'index')
@section('content')
<table class="table table-striped table-hover table-bordered">
    <tr>
        <td colspan="16" class="text-center fs-3 fw-bold bg-info">
            Grade details
            <a href="{{ route('grades.create') }}" class="float-end btn btn-success my-1 mx-2">Create
                grade</a>
        </td>
    </tr>
    <tr class="text-center">
        <!--<th>ID</th>-->
        <th>Grade Name</th>
        <th>Grade Group</th>
        <th>Grade Color</th>
        <th>Grade Order</th>
        <th colspan="4">Actions</th>
    </tr>

    <tr class="text-center">
        @foreach ($grades as $grade)
        <td>{{ $grade->grade_name }}</td>
        <td>{{ $grade->grade_group }}</td>
        <td><input type="color" value="{{ $grade->grade_color }}"></td>
        <td>{{ $grade->grade_order }}</td>
        <td>
            <form action="{{ route('grades.destroy', compact('grade')) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" onclick="return confirm('Do you want to delete')"
                class="btn btn-danger">
            </form>
        </td>
        <td><a href="{{ route('grades.edit',compact('grade')) }}" class="btn btn-warning">Edit</a></td>
        <td><a href="{{ route('grades.show',compact('grade')) }}" class="btn btn-info">Show</a></td>
        <td><a href="" class="btn btn-success">Addsubjects</a></td>
    </tr>
    @endforeach
</table>
@endsection
