@extends('layouts.app')
@section('content')
    <form class="row g-3">
        <div class="mb-3">
            <label for="formControlFirstName" class="form-label">Fist Name</label>
            <input type="text" class="form-control" id="formControlFirstName" placeholder="Fist Name">
        </div>

        <div class="mb-3">
            <label for="formControlLastName" class="form-label">Email address</label>
            <input type="text" class="form-control" id="formControlLastName" placeholder="Last Name">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlEmail" placeholder="name@example.com">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleFormControlPassword" placeholder="Password">
        </div>
        <button type="button" class="btn btn-primary">SIGN UP</button>
    </form>
@endsection

@section('css-link')
    <link rel="stylesheet" href="http://localhost/webBackend/resources/css/register.css">
@endsection
