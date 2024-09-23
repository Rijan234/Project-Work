<x-app-layout>
    <a href="{{ route('blog.index') }}">Back</a>
    <h1>blog Form</h1>
    <form action="{{ route('blog.update', $blog->id ) }}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('put')
        <div class="form-group">
            <label for="name">blog Name</label>
            <input id="name" class="form-control" type="text" name="name" value="{{ $blog->name }}">
        </div>
     
        <div class="form-group">
            <label for="image">Upload Image (Optional)</label>
            <input id="image" class="form-control-file" type="file" name="image">
        </div>


        <button type="submit">Update Record</button>

    </form>
</x-app-layout>
