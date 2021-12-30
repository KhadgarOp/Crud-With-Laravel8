@extends('layouts.form')

@section('container')

    @if (session()->has('nice'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('nice') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session()->has('logError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('logError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container-fluid border border-dark border-bottom-0 rounded-top text-center bg-light" style="max-width: 400px; padding: 30px;">
        <h1 class="text-dark pb-2">Login</h1>
        <form action="/login" method="POST" class="row row-cols-1 row-cols-xl-1 g-3">
            @csrf
            <div class="col-12">
                <input type="text" name="username" placeholder="Username" class="form-control @error('username') is-invalid @enderror" require autofocus value="{{ old('username') }}">
                @error('username') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col-12">
                <input type="password" name="password" placeholder="Password" class="form-control" require>
            </div>
            <div class="col-12 d-grid gap-2 mx-auto">
                <button class="btn btn-success" name="submit" type="submit">Login</button>
            </div>
        </form>
    </div>
    <div class="container-fluid border border-dark border-top-0 rounded-bottom text-center bg-custom pb-3" style="max-width: 400px">
        <p class="text-dark">Don't have an account yet? &nbsp;<a class="link-dark" href="sign-in">Sign In</a></p>
    </div>
@endsection