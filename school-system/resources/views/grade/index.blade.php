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

        @foreach ($grades as $grade)
            <tr class="text-center">
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
                <td><a href="{{ route('grades.edit', compact('grade')) }}" class="btn btn-warning">Edit</a></td>
                <td><a href="{{ route('grades.show', compact('grade')) }}" class="btn btn-info">Show</a></td>
                {{-- <td><a href="{{ url('/addsubject/'.$grade->id) }}" class="btn btn-success">Addsubjects</a></td> --}}
                <td>
                    <a href="#" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#addSubjectModal-{{ $grade->id }}">Addsubjects</a>
                </td>
            </tr>

            <!-- Modal for this grade -->
            <div class="modal fade" id="addSubjectModal-{{ $grade->id }}" tabindex="-1"
                aria-labelledby="addSubjectLabel-{{ $grade->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="addSubjectLabel-{{ $grade->id }}">Add subjects</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('addsubject', ['id' => $grade->id]) }}" method="post">
                                @csrf
                                <label>Select Your Subjects</label><br>
                                <input type="hidden" name="grade_id" value="{{ $grade->id }}">
                                @foreach ($subjects as $subject)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="subjects[]"
                                            value="{{ $subject->id }}"
                                            {{ $grade->subjects->contains('id', $subject->id) ? 'checked' : '' }}
                                            id="subject-{{ $grade->id }}-{{ $subject->id }}">
                                        <label class="form-check-label"
                                            for="subject-{{ $grade->id }}-{{ $subject->id }}">{{ $subject->subject_name }}</label>
                                    </div>
                                @endforeach
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
@endsection
