@extends('layout')

@section('content')

@include('errors')
<div class="container">
  <h1>{{$client->fullname}}</h1>
    <div class="col-md-12">
      <table class="table table-striped">
      <thead>
        <tr>
          <th>ID:</th>
          <td>{{$client->client_id}}</td>
        </tr>

        <tbody>
          <tr>
            <th>City:</th>
            <td>{{$client->city}}</td>
          </tr>

          <tr>
            <th>Address:</th>
            <td>{{$client->adress}}</td>
          </tr>

          <tr>
            <th>Phone:</th>
            <td>{{$client->phone}}</td>
          </tr>
        </tbody>
      </thead>
    </div>
</div>
@endsection
