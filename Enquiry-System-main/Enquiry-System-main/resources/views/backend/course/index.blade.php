<x-app-layout>
    <a href="{{ route('course.create') }}">Create New</a>
    <h1>Course List</h1>
    <table class="table">
        <tr>
            <th>Photo</th>
            <th>Name</th>
            <th>Action</th>
           
        </tr>


        @foreach ($courses as $course)
        <tr>
            <td>
                <img src="{{ asset($course->image) }}" width="90" alt="">
            </td>
            <td> {{ $course->name }} </td>
           
            <td>
                <a href="{{ route('course.edit', $course->id ) }}">Edit</a>
            </td>
        </tr>
        @endforeach

    </table>
</x-app-layout>
