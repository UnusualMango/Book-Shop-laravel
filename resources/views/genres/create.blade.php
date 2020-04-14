@extends('layout')

@section('content')
<div class="container">
  <h2>Create genre</h2>

@include('errors')

  <div class="row">
    <div class="col-md-12">
      {!! Form::open(['route' => 'genres.store']) !!}
      <div class="form-group">
        <label for="genre">Genre:</label>
        <input type="text" class="form-control" name="genre">
        <br>
        <button class="btn btn-success">Submit</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
