@extends('layout')

@section('content')
<div class="container">
  <h2>Create publisher</h2>

@include('errors')

  <div class="row">
    <div class="col-md-12">
      {!! Form::open(['route' => 'publishers.store']) !!}
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name">

        <label for="city">City:</label>
        <input type="text" class="form-control" name="city">

        <br>
        <button class="btn btn-success">Submit</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
