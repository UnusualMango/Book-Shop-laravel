@extends('layout')

@section('content')
<div class="container">
  <h2>Edit Book - {{$book->name}}</h2>

@include('errors')

  <div class="row">
    <div class="col-md-12">
      {!! Form::open(['route' => ['books.update', $book->book_id],"method"=>"PUT"]) !!}
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" value="{{$book->name}}">

        <label for="name">Author:</label>
        <select class="form-control" name="author_id">
            <?php
            $authors = DB::select('select * from authors');

            foreach ($authors as $author): ?>
              <option value="<?=$author->author_id?>" <?php if ($authorsbooks->author_id == $author->author_id) echo 'selected';?>><?=$author->authorname;?></option>
            <?php endforeach; ?>
        </select>

        <label for="year">Year of publishing:</label>
        <input type="number" class="form-control" name="year" value="{{$book->year}}">

        <label for="count">Count:</label>
        <input type="number" class="form-control" name="count" value="{{$book->count}}">

        <label for="price">Price:</label>
        <input type="number" class="form-control" name="price" value="{{$book->price}}">

        <label for="publisher_id">Publisher:</label>
        <select class="form-control" name="publisher_id">
            <?php
            $results = DB::select('select * from publishers');

            foreach ($results as $value): ?>
              <option value="<?=$value->publisher_id?>" <?php if ($book->publisher_id == $value->publisher_id) echo 'selected';?>><?=$value->name;?></option>
            <?php endforeach; ?>

        </select>

        <label for="supplier_id">Supplier:</label>
        <select class="form-control" name="supplier_id">
            <?php
            $results = DB::select('select * from suppliers');
            foreach ($results as $value): ?>
                <option value="<?=$value->supplier_id;?>" <?php if ($book->supplier_id == $value->supplier_id) echo 'selected';?>><?=$value->name;?></option>
            <?php endforeach; ?>
        </select>

        <label for="genre_id">Genre:</label>
        <select class="form-control" name="genre_id">
            <?php
            $results = DB::select('select * from genres');
            foreach ($results as $value): ?>
                <option value="<?=$value->genre_id;?>" <?php if ($book->genre_id == $value->genre_id) echo 'selected';?>><?=$value->genre;?></option>
            <?php endforeach; ?>
        </select>

        <br>

        <button class="btn btn-success">Submit</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
