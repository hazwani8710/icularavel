@extends('layouts.main')

@section('tajuk', 'Edit List')

@section('kandungan')
    
    {{-- {{dd($feed);}} --}}

    <h1>Edit Listing</h1>
    
    <div class="container">

    <form action="{{ route('feed.update', ['feed' => $feed->id]) }}" method="POST">
        @csrf
        @method('PUT')


        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Feed Title</label>
            <input 
                type="text" 
                name="title" 
                id="title" 
                class="form-control" 
                value="{{ old('title', $feed->title) }}" 
                required
                minlength="3"
                maxlength="100"
            >
        </div>
        
        <div class="mb-3">
            <label for="title" class="form-label">Decsription</label>
            <textarea 
                name="description" 
                class="form-control" 
                id="description" 
                cols="30" 
                rows="3"
                
            >{{ old('title', $feed->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Feed</button>
    
    </form>

    </div>

@endsection