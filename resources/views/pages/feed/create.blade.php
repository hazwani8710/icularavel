@extends('layouts.main')

@section('tajuk', 'Create List')

@section('kandungan')
   {{-- {{dd($feed);}} --}}
    <h1>Create Listing</h1>
    
    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('feed.store') }}" method="POST">
            @csrf
             
    
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Feed Title</label>
                <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    class="form-control" 
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
                    
                ></textarea>
            </div>
    
            <button type="submit" class="btn btn-primary">Save</button>
        
        </form>
        
    </div>

@endsection

