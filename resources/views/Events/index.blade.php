@extends('Admin.layouts.app')
@section('content')
<div class="span9">
    <div class="content">
        <a href="{{ route('create')}}" class="btn btn-success btn-small mb-3">Add Event</a>
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Event Name</th>
                <th scope="col">Available</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                <tr>
                    <th scope="row">{{$event->id}}</th>
                    <td>{{$event->name}}</td>
                    <td><span class="badge badge-success">{{$event->rem}}</span></td>
                    <td><a href="{{route('edit',$event->id)}}"class="btn btn-primary">Edit</a></td>
                    <td>
                        <a href="{{ route('delete',$event->id)}}" class="btn btn-danger">Delete</a>

                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>

    </div>

</div>




@endsection
