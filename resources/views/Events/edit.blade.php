@extends('Admin.layouts.app')
@section('content')

<div class="span9">
    <div class="content">
        <h3>Event Edit</h3>
        <form action="{{ route('update',$event->id)}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Event Name</label>
                <input type="text" class="form-control" name="name" value="{{ $event->name}}" id="">
                @error('name')
                    <span class="error"  style="color: #ff8000">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Event Category</label>
                <select name="type_id" id="" class="form-control">
                    @foreach ($types as $type)

                        <option value="{{$type->id}}">{{$type->name}}</option>

                    @endforeach

                </select>
                @error('type_id')
                    <span class="error"  style="color: #ff8000">{{ $message }}</span>
                @enderror
            </div>



            <div class="form-group">
                <label for="name">Event Small Description </label>
               <textarea name="description" id="" cols="30" rows="3" class="form-control"> {{$event->description}}</textarea>
                @error('description')
                    <span class="error"  style="color: #ff8000">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="name">Event Price</label>
                <input type="number" class="form-control" name="price" value="{{$event->price}}" id="">
                @error('price')
                    <span class="error"  style="color: #ff8000">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="name">Availble Seats</label>
                <input type="number" class="form-control" name="seats" value="{{$event->seats}}" id="">
                @error('seats')
                    <span class="error"  style="color: #ff8000">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Event Date</label>
                <input type="datetime-local" class="form-control" name="date" value="{{$event->date}}" id="">
                @error('date')
                    <span class="error"  style="color: #ff8000">{{ $message }}</span>
                @enderror
            </div>

            <button class="btn btn-success" type="submit">Update Event</button>

        </form>

    </div>
</div>



@endsection
