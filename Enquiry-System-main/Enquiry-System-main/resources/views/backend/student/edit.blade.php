<x-app-layout>
    <a href="{{ route('student.index') }}">Back</a>
    <h1>Student Form</h1>
    <form action="{{ route('student.update', $student->id ) }}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('put')
        <div class="form-group">
            <label for="name">Student Name</label>
            <input id="name" class="form-control" type="text" name="name" value="{{ $student->name }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" class="form-control" type="text" name="email" value="{{ $student->email }}">
        </div>
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input id="mobile" class="form-control" type="text" name="mobile" value="{{ $student->mobile }}">
        </div>
        <div class="form-group">
            <label for="course">Course</label>
            <input id="course" class="form-control" type="text" name="course" value="{{ $student->course }}">
        </div>

        <div class="form-group">
            <label for="photo">Upload Photo (optional)</label>
            <input id="photo" class="form-control-file" type="file" name="photo">

            <div>

                <img src="{{ asset($student->photo) }}" width="100" alt="">
            </div>
        </div>

        <div class="form-group">
            <label for="status">Select Status</label>
            <select id="status" class="form-control" name="status">
                <option value="follow-up">Follow Up</option>
                <option value="phone-call">Phone Call</option>
                <option value="cancelled">Cancelled</option>
                <option value="enrolled">Enrolled</option>
            </select>
        </div>

        <div class="form-group">
            <label for="remarks">Remarks</label>
            <textarea id="remarks" class="form-control" name="remarks" rows="3">{{ $student->remarks }}
            </textarea>
        </div>

        <button type="submit">Update Record</button>

    </form>
</x-app-layout>
