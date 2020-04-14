@extends('layout')

@section('content')

@include('errors')
<div class="container">
  <h2>{{$supplier->name}}</h2>
    <div class="col-md-12">
      <table class="table table-striped">
      <thead>
        <tr>
          <th>ID:</th>
          <td>{{$supplier->supplier_id}}</td>
        </tr>

        <tbody>
          <tr>
            <th>Email:</th>
            <td>{{$supplier->email}}</td>
          </tr>

          <tr>
            <th>Phone:</th>
            <td>{{$supplier->phone}}</td>
          </tr>
        </tbody>
      </thead>
    </div>
</div>
@endsection
