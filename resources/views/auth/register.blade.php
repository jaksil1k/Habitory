@extends('layouts.app')
@section('content')
<form action="{{route("register_process")}}" class="row g-3" method="POST">
    @csrf
    <div class="mb-3">
        <label for="formControlFirstName" class="form-label">Name</label>
        <input type="text" class="form-control" id="formControlFirstName" placeholder="Name" name="name">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlEmail" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlEmail" placeholder="name@example.com" name="email">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleFormControlPassword" placeholder="Password" name="password">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlPassword2" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleFormControlPassword2" placeholder="Repassword" name="password_confirmation">
    </div>

    <a href="{{route("login")}}">Already signed up?</a>
    <button type="submit" class="btn btn-primary">SIGN UP</button>
</form>
@endsection

@section('css-link')
    <link rel="stylesheet" href="http://localhost/webBackend/resources/css/register.css">
@endsection
