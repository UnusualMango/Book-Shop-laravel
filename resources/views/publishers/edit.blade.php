@extends('layout')

@section('content')
<div class="container">
  <h2>Edit publisher - {{$publisher->name}}</h2>

@include('errors')

  <div class="row">
    <div class="col-md-12">
      {!! Form::open(['route' => ['publishers.update', $publisher->publisher_id],"method"=>"PUT"]) !!}
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" value="{{$publisher->name}}">

        <label for="city">City:</label>
        <input type="text" class="form-control" name="city" value="{{$publisher->city}}">


        <br>

        <button class="btn btn-success">Submit</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
