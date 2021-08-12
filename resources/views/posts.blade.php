@extends('layouts.main')
{{-- extends ini merujuk bahwa home ini merupakan child dari layout main.blade.php --}}
@section('container')
{{-- apapun yang ada di dalam section ini , akan di proses kedalam yield container di main.blade.php --}}

    @foreach ($posts as $post )
        <article class="pb-4 mb-5 border-bottom">
        <h1 class="mb-5">{{ $title }}</h1>
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                    {{ $post->title }}
                </a>
            </h2>

            <p>By : <a href="/authors/{{ $post->author->username }}" class="text-decoration-none"> {{ $post->user->name }} </a>  in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            
            <p>{{ $post->excerpt }}</p>

            <a href="/posts/{{ $post->slug }}" class="text-decoration-none"> Read more...</a>
        </article>
    @endforeach

@endsection