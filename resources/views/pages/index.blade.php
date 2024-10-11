@extends('welcome');
@section('main')

<h4 class="m-3">Users List
    <a href="{{url('data/create')}}" class="btn btn-primary float-end">Add New User</a>
    <div><a href="{{url('logout')}}" class="btn btn-danger">Logout</a></div>    
</h4>

<div class="container">
    @session('status')
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endsession
<table class="table">

    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    @foreach ($info as $info)
    <tbody>
        <tr>
            <th scope="row">{{$info->id}}</th>
            <td>{{$info->name}}</td>
            <td>{{$info->address}}</td>
            <td>{{$info->phone}}</td>
            <td><a href="{{route('data.edit' , $info->id)}}" class="btn btn-success">Edit</a></td>
            <td><a href="{{route('data.show' , $info->id)}}" class="btn btn-primary">Show</a></td>
            <td>
                <form action="{{route('data.destroy', $info->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                 </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
</div>


@endsection
