@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="mb-3 text-center h3 fw-normal">Registration Form</h1>
            <form action="/register" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top @error('name')
                        is-invalid
                    @enderror" id="name" placeholder="Name" value="{{ old('name') }}">
                    <label for="name">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username')
                        is-invalid
                    @enderror" id="username" placeholder="username" value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email" name="email"
                    class="form-control @error('email')
                        is-invalid
                    @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                    <label for="floatingInput">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom @error('password')
                        is-invalid
                    @enderror" id="password" placeholder="Password">
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="mt-3 w-100 btn btn-lg btn-primary" type="submit">Register Now</button>
            </form>
            <small class="mt-3 text-center d-block">Already registered ? <a href="/login">Login!</a></small>
        </main>
    </div>
</div>
@endsection