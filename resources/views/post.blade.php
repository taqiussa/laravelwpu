@extends('layouts.main')
{{-- extends ini merujuk bahwa home ini merupakan child dari layout main.blade.php --}}
@section('container')
{{-- apapun yang ada di dalam section ini , akan di proses kedalam yield container di main.blade.php --}}

        <article class="mb-5">
            <h2>
                    {{ $post->title }}
            </h2>
            <p>By : <a href="/authors/{{ $post->author->username }}" class="text-decoration-none"> {{ $post->user->name }} </a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            {{-- {{  }} digunakan untuk menghindari html special characters --}}
            {{-- {!!  !!} digunakan untuk memasukkan html special characters --}}
            {!! $post->body !!}
        </article>
        <a href="/posts" class="text-decoration-none">
            Back
        </a>
@endsection