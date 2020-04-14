@extends('layout')

@section('content')
<div class="container">
  <h2>Create Supplier</h2>

@include('errors')

  <div class="row">
    <div class="col-md-12">
      {!! Form::open(['route' => 'suppliers.store']) !!}
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name">

        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email">

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
