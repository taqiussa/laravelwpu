@extends('layouts.main')
{{-- extends ini merujuk bahwa home ini merupakan child dari layout main.blade.php --}}
@section('container')
{{-- apapun yang ada di dalam section ini , akan di proses kedalam yield container di main.blade.php --}}

    @foreach ($posts as $post )
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post['slug'] }}">
                    {{ $post['title'] }}
                </a>
            </h2>
            <h5>By : {{ $post['author'] }}</h5>
            <p>{{ $post['body'] }}</p>
        </article>
    @endforeach

@endsection