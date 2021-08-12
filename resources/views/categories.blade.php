@extends('layouts.main')
{{-- extends ini merujuk bahwa home ini merupakan child dari layout main.blade.php --}}
@section('container')
{{-- apapun yang ada di dalam section ini , akan di proses kedalam yield container di main.blade.php --}}
    <h1 class="mb-5">{{ $title }}</h1>
    @foreach ($categories as $category )
        <ul>
            <li>
                <h2><a href="/categories/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a></h2>
            </li>
        </ul>
    @endforeach

@endsection