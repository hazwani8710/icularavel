@extends('layouts.main')
@section('tajuk', 'Sign In')
@section('kandungan')

<div class="container mt-5">
        
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('auth.authenticate') }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email">
            
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Log In</button>
        
    </form>

</div>

@endsection