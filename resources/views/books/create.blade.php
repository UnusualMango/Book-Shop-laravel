@extends('layout')

@section('content')
<div class="container">
  <h1>Create Book</h1>
  <div class="row">
    <div class="col-md-12">
      {!! Form::open(['route' => 'books.store']) !!}
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name">

        <label for="year">Year:</label>
        <input type="number" class="form-control" name="year">

        <label for="count">Count:</label>
        <input type="number" class="form-control" name="count">

        <label for="price">Price:</label>
        <input type="number" class="form-control" name="price">

        <label for="publisher">Publisher:</label>
        <input type="number" class="form-control" name="publisher">

        <label for="supplier">Supplier:</label>
        <input type="number" class="form-control" name="supplier">

        <label for="genre">Genre:</label>
        <input type="number" class="form-control" name="genre">

        <br>

        <button class="btn btn-success">Submit</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
