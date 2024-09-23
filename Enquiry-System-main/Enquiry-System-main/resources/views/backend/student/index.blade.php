<x-app-layout>
    <a href="{{ route('student.create') }}">Create New</a>
    <h1>Student List</h1>
    <table class="table">
        <tr>
            <th>Photo</th>
            <th>Student</th>
            <th>Mobile</th>
            <th>Course</th>
            <th>Status</th>
            <th>Remarks</th>
            <th>Updated At</th>
            <th>Action</th>
        </tr>


        @foreach ($students as $student)
        <tr>
            <td>
                <img src="{{ asset($student->photo) }}" width="100" alt="">
            </td>
            <td> {{ $student->name }} </td>
            <td> {{ $student->mobile }} </td>
            <td> {{ $student->course->name }} </td>
            <td> 
                  @if ($student->status == 'cancelled')
                    <span class="badge bg-danger text-white">{{ $student->status }} </span>
                    @elseif  ($student->status == 'enrolled')
                    <span class="badge bg-success text-white">{{ $student->status }} </span>

                    @else
                    <span class="badge bg-warning text-white">{{ $student->status }} </span>

                   @endif
            </td>
            <td> {{ $student->remarks }} </td>
            <td> {{ $student->updated_at }}</td>
            <td>
                <form action="{{ route('student.destroy', $student->id ) }}" method="post">
                    @csrf
                    @method('delete')
                    <a href="{{ route('student.edit', $student->id ) }}" class="btn btn-success btn-sm">Edit</a>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
</x-app-layout>
