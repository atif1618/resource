@extends('welcome')
@section('main')
<h3>Update Users List</h3>
<form action="{{route('data.update' , $info->id)}}" method="post">
    @csrf
    @method('put')
    <div class="container mt-5">
    <div class="form-group">
        <label for="exampleInputName1">Name</label>
        <input type="name" name="name" class="form-control" value="{{$info->name}}"  placeholder="Enter name">
        @error ('name') <span class="text-danger">{{$message}}</span> @enderror
      </div>
    <div class="form-group">
      <label for="exampleInputAddress1">Address</label>
      <input type="address" name="address" class="form-control" value="{{$info->address}}"  placeholder="Enter Address">
      @error ('address') <span class="text-danger">{{$message}}</span> @enderror

    </div>
    <div class="form-group">
      <label for="exampleInputPhone1">Phone</label>
      <input type="number" name="phone" class="form-control" value="{{$info->phone}}"  placeholder="Enter Phone No">
      @error ('phone') <span class="text-danger">{{$message}}</span> @enderror

    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
@endsection
