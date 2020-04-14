@extends('layout')

@section('content')
<div class="container">
  <h1>Add Person</h1>

@include('errors')

  <div class="row">
    <div class="col-md-12">
      {!! Form::open(['route' => 'clients.store']) !!}
      <div class="form-group">
        <label for="fullname">Fullname:</label>
        <input type="text" class="form-control" name="fullname">

        <label for="city">City:</label>
        <input type="text" class="form-control" name="city">

        <label for="adress">Address:</label>
        <input type="text" class="form-control" name="adress">

        <label for="phone">Phone:</label>
        <input type="text" class="form-control" name="phone">

        <br>
        <button class="btn btn-success">Submit</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
