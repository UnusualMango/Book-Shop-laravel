@extends('layout')

@section('content')
<div class="container">
  <h2>Edit author - {{$author->authorname}}</h2>

@include('errors')

  <div class="row">
    <div class="col-md-12">
      {!! Form::open(['route' => ['authors.update', $author->author_id],"method"=>"PUT"]) !!}
      <div class="form-group">
        <label for="authorname">Fullame:</label>
        <input type="text" class="form-control" name="authorname" value="{{$author->authorname}}">

        <label for="birth_date">Birth date:</label>
        <input type="date" class="form-control" name="birth_date" value="{{$author->birth_date}}">

        <label for="country">Counrty:</label>
        <input type="text" class="form-control" name="country" value="{{$author->country}}">

        <br>
        <button class="btn btn-success">Submit</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
