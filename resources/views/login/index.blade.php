@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        @if (session()->has('success'))
            <div class="alert alert-dismissible alert-success fade show" role="alert">
                    {{ session('success') }}
                <button class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        @endif
        @if (session()->has('loginError'))
            <div class="alert alert-dismissible alert-danger fade show" role="alert">
                    {{ session('loginError') }}
                <button class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        @endif
        <main class="form-signin">
            <h1 class="mb-3 text-center h3 fw-normal">Please Login</h1>
            <form action="/login" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="email" class="form-control @error('email')
                        is-invalid
                    @enderror" id="email" name="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <small class="mt-3 text-center d-block">Not registered ? <a href="/register">Register Now!</a></small>
        </main>
    </div>
</div>
@endsection