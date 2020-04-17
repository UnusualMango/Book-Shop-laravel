@extends('layout')

@section('content')
<div class="container">
  <h2>Create order</h2>

@include('errors')

  <div class="row">
    <div class="col-md-12">
      {!! Form::open(['route' => 'orders.store']) !!}
      <div class="form-group">
        <label for="client_id">Client name:</label>
        <select class="form-control" name="client_id">
            <?php
            $results = DB::select('select * from clients');
            foreach ($results as $value): ?>
                <option value="<?=$value->client_id;?>"><?=$value->fullname;?></option>
            <?php endforeach; ?>
        </select>

        <label for="order_date">Order date:</label>
        <input type="date" class="form-control" name="order_date">

        <label for="execution_date">Date of execution(not required):</label>
        <input type="date" class="form-control" name="execution_date">

        <label for="book_id">Book:</label>
        <select class="form-control" name="book_id">
            <?php
            $books = DB::select('select * from books');
            foreach ($books as $book): ?>
                <option value="<?=$book->book_id;?>"><?=$book->name;?></option>
            <?php endforeach; ?>
        </select>

        <label for="count">Count:</label>
        <input type="number" class="form-control" name="count">

        <label for="book_price">Book price:</label>
        <input type="number" class="form-control" name="book_price">



        <br>

        <button class="btn btn-success">Submit</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
