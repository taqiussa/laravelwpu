@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="mb-3 text-center h3 fw-normal">Registration Form</h1>
            <form>
        
                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
                    <label for="name">Name</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control" id="username" placeholder="username">
                    <label for="username">Username</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email"
                    class="form-control" id="email" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>
                <button class="mt-3 w-100 btn btn-lg btn-primary" type="submit">Register Now</button>
            </form>
            <small class="mt-3 text-center d-block">Already registered ? <a href="/login">Login!</a></small>
        </main>
    </div>
</div>
@endsection