<x-app-layout>
    <a href="{{ route('blog.index') }}">Back</a>
    <h1>blog Form</h1>
    <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
        @csrf 
        <div class="form-group">
            <label for="title">Blog title</label>
            <input id="title" class="form-control" type="text" name="title">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" class="form-control summernote" name="description" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="image">Upload Image (Optional)</label>
            <input id="image" class="form-control-file" type="file" name="image">
        </div>

        <div class="form-group">
            <label for="tags">Tags</label>
            <input id="tags" class="form-control" type="text" name="tags">
        </div>

        <button type="submit">Save Record</button>

    </form>
</x-app-layout>
