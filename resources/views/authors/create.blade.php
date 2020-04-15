@extends('layout')

@section('content')
<div class="container">
  <h2>Add author</h2>

@include('errors')

  <div class="row">
    <div class="col-md-12">
      {!! Form::open(['route' => 'authors.store']) !!}
      <div class="form-group">
        <label for="authorname">Name:</label>
        <input type="text" class="form-control" name="authorname">

        <label for="bitrh_date">Bith date:</label>
        <input type="date" class="form-control" name="bitrh_date">

        <label for="country">Country:</label>
        <input type="text" class="form-control" name="country">

        <br>

        <button class="btn btn-success">Submit</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
