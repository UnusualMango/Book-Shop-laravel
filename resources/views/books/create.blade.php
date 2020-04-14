@extends('layout')

@section('content')
<div class="container">
  <h2>Create Book</h2>

@include('errors')

  <div class="row">
    <div class="col-md-12">
      {!! Form::open(['route' => 'books.store']) !!}
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name">

        <label for="year">Year of publishing:</label>
        <input type="number" class="form-control" name="year">

        <label for="count">Count:</label>
        <input type="number" class="form-control" name="count">

        <label for="price">Price:</label>
        <input type="number" class="form-control" name="price">

        <label for="publisher_id">Publisher:</label>
        <select class="form-control" name="publisher_id">
            <?php
            $results = DB::select('select * from publishers');
            foreach ($results as $value): ?>
                <option value="<?=$value->publisher_id;?>"><?=$value->name;?></option>
            <?php endforeach; ?>
        </select>

        <label for="supplier_id">Supplier:</label>
        <select class="form-control" name="supplier_id">
            <?php
            $results = DB::select('select * from suppliers');
            foreach ($results as $value): ?>
                <option value="<?=$value->supplier_id;?>"><?=$value->name;?></option>
            <?php endforeach; ?>
        </select>

        <label for="genre_id">Genre:</label>
        <select class="form-control" name="genre_id">
            <?php
            $results = DB::select('select * from genres');
            foreach ($results as $value): ?>
                <option value="<?=$value->genre_id;?>"><?=$value->genre;?></option>
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
