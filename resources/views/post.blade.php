@extends('layouts.main')
{{-- extends ini merujuk bahwa home ini merupakan child dari layout main.blade.php --}}
@section('container')
{{-- apapun yang ada di dalam section ini , akan di proses kedalam yield container di main.blade.php --}}

        <article class="mb-5">
            <h2>
                    {{ $post->title }}
            </h2>
            <h5>By : {{ $post->author }} in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
            {{-- {{  }} digunakan untuk menghindari html special characters --}}
            {{-- {!!  !!} digunakan untuk memasukkan html special characters --}}
            {!! $post->body !!}
        </article>
        <a href="/posts">
            Back
        </a>
@endsection