@extends('layouts.main')
{{-- extends ini merujuk bahwa home ini merupakan child dari layout main.blade.php --}}
@section('container')
{{-- apapun yang ada di dalam section ini , akan di proses kedalam yield container di main.blade.php --}}

        <article class="mb-5">
            <h2>
                    {{ $post['title'] }}
            </h2>
            <h5>By : {{ $post['author'] }}</h5>
            <p>{{ $post['body'] }}</p>
        </article>
        <a href="/posts">
            Back
        </a>
@endsection