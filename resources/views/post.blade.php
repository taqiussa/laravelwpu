@extends('layouts.main')
{{-- extends ini merujuk bahwa home ini merupakan child dari layout main.blade.php --}}
@section('container')
{{-- apapun yang ada di dalam section ini , akan di proses kedalam yield container di main.blade.php --}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h2>
                        {{ $post->title }}
                </h2>
                <p>By : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->username }} </a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                {{-- {{  }} digunakan untuk menghindari html special characters --}}
                {{-- {!!  !!} digunakan untuk memasukkan html special characters --}}
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            <a href="/posts" class="text-decoration-none">
                Back
            </a>
        </div>
    </div>
</div>
@endsection