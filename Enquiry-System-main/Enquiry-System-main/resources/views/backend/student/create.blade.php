<x-app-layout>
    <a href="{{ route('student.index') }}">Back</a>
    <h1>Student Form</h1>
    <form action="{{ route('student.store') }}" method="post" enctype="multipart/form-data">
        @csrf 
        <div class="form-group">
            <label for="name">Provide Student Name</label>
            <input id="name" class="form-control" type="text" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" class="form-control" type="text" name="email">
        </div>
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input id="mobile" class="form-control" type="text" name="mobile">
        </div>
        
        <!-- select garne rakheko course -->
        <div class="form-group">
            <label for="course">Select Course</label>
            <select id="course" class="form-control" name="course_id">
                @foreach ($courses as $course)
                <option value="{{ $course->id }}">{{ $course->name }}</option>

                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="photo">Upload Photo (optional)</label>
            <input id="photo" class="form-control-file" type="file" name="photo">
        </div>

        <div class="form-group">
            <label for="remarks">Remarks</label>
            <textarea id="remarks" class="form-control" name="remarks" rows="3"></textarea>
        </div>

        <button class="btn btn-primary" type="submit">Save Record</button>

    </form>
</x-app-layout>
