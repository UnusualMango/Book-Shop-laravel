@extends('layout')

@section('content')
<div class="container">
  <h2>Edit supplier - {{$supplier->name}}</h2>

@include('errors')

  <div class="row">
    <div class="col-md-12">
      {!! Form::open(['route' => ['suppliers.update', $supplier->supplier_id],"method"=>"PUT"]) !!}
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" value="{{$supplier->name}}">

        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" value="{{$supplier->email}}">

        <label for="phone">Phone:</label>
        <input type="text" class="form-control" name="phone" value="{{$supplier->phone}}">


        <br>

        <button class="btn btn-success">Submit</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
