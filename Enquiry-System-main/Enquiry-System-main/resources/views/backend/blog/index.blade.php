<x-app-layout>
    <a href="{{ route('blog.create') }}">Create New</a>
    <h1>Blog List</h1>

    @foreach ($blogs as $blog)

    <div class="card">
        <div class="card-body">
            <h5>{{ $blog->title }}</h5>
            {!! $blog->description !!}

            <?php
            $tags= explode(',' , $blog->tags);
            ?>
            @foreach ($tags     as $tag )

            <span class="btn btn-primary">{{ $tag }}</span>
            
                
            @endforeach
        </div>
    </div>
        
    @endforeach
    
</x-app-layout>
