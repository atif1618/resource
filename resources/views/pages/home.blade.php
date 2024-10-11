@extends('welcome')
@section('main')
<form action="" method="">
    <div class="container mt-5">
    <div class="form-group">
        <label for="exampleInputName1">Name</label>
        <input type="name" class="form-control"  placeholder="Enter name">
      </div>
    <div class="form-group">
      <label for="exampleInputAddress1">Address</label>
      <input type="address" class="form-control"  placeholder="Enter Address">
    </div>
    <div class="form-group">
      <label for="exampleInputPhone1">Phone</label>
      <input type="number" class="form-control"  placeholder="Enter Phone No">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection
