@extends('layout')

@section('content')
<div class="container">
  <h2>Edit genre - {{$genre->genre}}</h2>

@include('errors')

  <div class="row">
    <div class="col-md-12">
      {!! Form::open(['route' => ['genres.update', $genre->genre_id],"method"=>"PUT"]) !!}
      <div class="form-group">
        <label for="genre">Genre:</label>
        <input type="text" class="form-control" name="genre" value="{{$genre->genre}}">

        <br>

        <button class="btn btn-success">Submit</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
