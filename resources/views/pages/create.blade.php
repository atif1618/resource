@extends('welcome')
@section('main')
<form action="{{route('data.store')}}" method="post">
@csrf
    <div class="container mt-5">
    <div class="form-group">
        <label for="exampleInputName1">Name</label>
        <input type="name" name="name" class="form-control"  placeholder="Enter name">
        @error ('name') <span class="text-danger">{{$message}}</span> @enderror
      </div>
    <div class="form-group">
      <label for="exampleInputAddress1">Address</label>
      <input type="address" name="address" class="form-control"  placeholder="Enter Address">
      @error ('address') <span class="text-danger">{{$message}}</span> @enderror

    </div>
    <div class="form-group">
      <label for="exampleInputPhone1">Phone</label>
      <input type="number" name="phone" class="form-control"  placeholder="Enter Phone No">
      @error ('phone') <span class="text-danger">{{$message}}</span> @enderror

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection
