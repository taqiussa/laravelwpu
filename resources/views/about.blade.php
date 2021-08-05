@extends('layouts.main')
{{-- extends ini merujuk bahwa home ini merupakan child dari layout main.blade.php --}}
@section('container')
{{-- apapun yang ada di dalam section ini , akan di proses kedalam yield container di main.blade.php --}}
<h1>Halaman About</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-tumbnail rounded-circle">
@endsection