@extends('Admin.layouts.app')
@section('content')
<div class="span9">
    <div class="content">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">User Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Time</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                       {{ $user->created_at->diffForHumans();}}

                    </td>
                  </tr>
                @endforeach


            </tbody>
          </table>

    </div>

</div>




@endsection
