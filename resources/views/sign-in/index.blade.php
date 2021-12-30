@extends('layouts.form') 

@section('container')    
    <div class="container-fluid border border-dark border-bottom-0 rounded-top text-center bg-light" style="max-width: 400px; padding: 30px;">
        <h1 class="text-dark pb-2">Sign In</h1>
        <form action="/sign-in" method="POST" class="row row-cols-1 row-cols-xl-1 g-3">
            @csrf
            <div class="col-12">
                <input type="text" name="username" placeholder="Username" class="form-control @error('username') is-invalid @enderror" required autofocus value="{{ old('username') }}">
                @error('username') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col-12">
                <input type="email" name="email" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror" required value="{{ old('email') }}">
                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col-12">
                <input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" required>
                @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col-12">
                <input type="password" name="password_confirmation" placeholder="Re-enter Your Password" class="form-control" required>
            </div>
            <div class="col-12 d-grid gap-2 mx-auto">
                <button class="btn btn-success" name="submit" type="submit">Sign In</button>
            </div>
        </form>
    </div>
    <div class="container-fluid border border-dark border-top-0 rounded-bottom text-center bg-custom pb-3" style="max-width:400px">
        <p class="text-dark">Already have an account? &nbsp;<a class="link-dark" href="login">Log In</a></p>
    </div>
@endsection