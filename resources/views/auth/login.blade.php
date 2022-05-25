@extends('layouts.app')
@section('content')
    <form class="row g-3" method="POST" action="{{route("login_process")}}">
        @csrf

        <div class="mb-3">
            <label for="exampleFormControlEmail" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleFormControlEmail" placeholder="name@example.com">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlPassword" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleFormControlPassword" placeholder="Password">
        </div>

        <a href="{{route("register")}}">Not registered yet?</a>
        <button type="submit" class="btn btn-primary">LOG IN</button>
    </form>
@endsection

@section('css-link')
    <link rel="stylesheet" href="http://localhost/webBackend/resources/css/register.css">
@endsection
