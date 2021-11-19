@extends('layouts.app')

@section('content')
<div class="container">

    @foreach ($events as $event)


    <div class="card mb-3">
        <div class="card-header">
         {{ $event->name}}
         <button type="button" class="btn btn-primary float-right">
            Available <span class="badge badge-light">{{$event->rem}}</span>
          </button>
        </div>
        <div class="card-body">
          <h5 class="card-title">{{$event->date}}</h5>
          <p class="card-text mb-3">{{$event->description}}</p>

          <form action="{{ route('book')}}" method="post">
              @csrf
            <label for=""><b>Number of seats</b></label>
            <input type="hidden" name="event_id" value="{{$event->id}}">
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <input type="number" class="form-control mb-2" name="seats" value="{{ old('seats')}}">

           <button class="btn btn-success mt-3">Book</button>

          </form>
          @error('seats')
                <span class="error"  style="color: #ff8000">{{ $message }}</span>
            @enderror

        </div>
    </div>

    @endforeach

    {{ $events->links() }}

    <footer>

        <p>Churchi Events  - Copyright 2021©</p>


    </footer>

</div>
@endsection
@section('scripts')

@endsection
