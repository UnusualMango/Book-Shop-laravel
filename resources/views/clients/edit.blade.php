@extends('layout')

@section('content')
<div class="container">
  <h1>Edit person - {{$client->fullname}}</h1>

@include('errors')

  <div class="row">
    <div class="col-md-12">
      {!! Form::open(['route' => ['clients.update', $client->client_id],"method"=>"PUT"]) !!}
      <div class="form-group">
        <label for="fullname">Fullame:</label>
        <input type="text" class="form-control" name="fullname" value="{{$client->fullname}}">

        <label for="city">City:</label>
        <input type="text" class="form-control" name="city" value="{{$client->city}}">

        <label for="adress">Address:</label>
        <input type="text" class="form-control" name="adress" value="{{$client->adress}}">

        <label for="phone">Phone:</label>
        <input type="text" class="form-control" name="phone" value="{{$client->phone}}">


        <br>

        <button class="btn btn-success">Submit</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
