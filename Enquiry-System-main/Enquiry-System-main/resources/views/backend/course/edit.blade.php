<x-app-layout>
    <a href="{{ route('course.index') }}">Back</a>
    <h1>Course Form</h1>
    <form action="{{ route('course.update', $course->id ) }}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('put')
        <div class="form-group">
            <label for="name">course Name</label>
            <input id="name" class="form-control" type="text" name="name" value="{{ $course->name }}">
        </div>
     
        <div class="form-group">
            <label for="image">Upload Image (Optional)</label>
            <input id="image" class="form-control-file" type="file" name="image">
        </div>


        <button type="submit">Update Record</button>

    </form>
</x-app-layout>
