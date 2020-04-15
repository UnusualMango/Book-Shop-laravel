@extends('layout')

@section('content')

@include('errors')
<div class="container">
  <h2>{{$author->authorname}}</h2>
    <div class="col-md-12">
      <table class="table table-striped">
      <thead>
        <tr>
          <th>ID:</th>
          <td>{{$author->author_id}}</td>
        </tr>

        <tbody>
          <tr>
            <th>Birth date:</th>
            <td>{{$author->birth_date}}</td>
          </tr>

          <tr>
            <th>Country:</th>
            <td>{{$author->country}}</td>
          </tr>

        </tbody>
      </thead>
    </div>
</div>
@endsection
