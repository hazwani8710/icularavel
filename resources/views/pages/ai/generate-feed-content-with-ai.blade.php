@extends('layouts.main')

@section('tajuk', 'AI Page')
  
@section('kandungan')
    <h1>I am AI Page</h1>
    <div class="container mt-5" >
       

    <form action="{{ route('ai.feed')}}" method = "POST">
        @csrf
        @method('GET')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter your title" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Generate</button>
    </form>

    <div></div>

    @if(isset($data) && isset($data['candidates']))
        <div>
            <h2>Generated Response:</h2>
            @foreach($data['candidates'] as $item)
                @if(isset($item['content']['parts']))
                    @foreach($item['content']['parts'] as $part)
                        <div>
                            {!! $part['text'] !!} <!-- Render HTML directly -->
                        </div>
                    @endforeach
                @endif
            @endforeach
        </div>
    @elseif(isset($error))
        <div>
            <h2>Error:</h2>
            <p>{{ $error }}</p>
        </div>
    @else
    
        <p>No content generated.</p>
    @endif
    
</div>
  @endsection