@extends('layouts.main')

@section('tajuk', 'Home')
    
@section('kandungan')
    @php ($_name = $name ?? "team")

    @if($_name == 'abu')
        <p>You are banned!!</p>
    @else
        <h1>Hello, {{ $_name }} </h1>
    @endif

    <button type="button" class="btn btn-warning">Click Me</button>
@endsection



{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.nama') }}</title>
</head>
<body>
    {{-- <h1>Hello, {{$name}} </h1> --}}
    {{-- <h1>Hello, {{ $name ?? "Hazwani" }} </h1> --}}


    {{-- {{---
    TODO
    1. If name equal to ABu, I want to display You are banned
    ---}}
{{-- @php ($_name = $name ?? "team")

@if($_name == 'abu')
    <p>You are banned!!</p>
@else
    <h1>Hello, {{ $_name }} </h1>
@endif

</body>
</html> --}} 