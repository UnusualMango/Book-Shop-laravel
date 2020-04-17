@extends('layout')

@section('content')
<div class="container">
  <h2>Edit order #{{$order->order_id}}</h2>

@include('errors')

  <div class="row">
    <div class="col-md-12">
      {!! Form::open(['route' => ['orders.update', $order->order_id],"method"=>"PUT"]) !!}
      <div class="form-group">

        <select class="form-control" name="client_id">
            <?php
            $results = DB::select('select * from clients');

            foreach ($results as $value): ?>
              <option value="<?=$value->client_id?>" <?php if ($order->client_id == $value->client_id) echo 'selected';?>><?=$value->fullname;?></option>
            <?php endforeach; ?>

        </select>

        <label for="order_date">Order date:</label>
        <input type="date" class="form-control" name="order_date" value="{{$order->order_date}}">

        <label for="execution_date">Execution date:</label>
        <input type="date" class="form-control" name="execution_date" value="{{$order->execution_date}}">

        <label for="execution_date">Book:</label>
        <select class="form-control" name="book_id">
            <?php
            $books = DB::select('select * from books');

            foreach ($books as $book): ?>
              <option value="<?=$book->book_id?>" <?php if ($ordered->book_id == $book->book_id) echo 'selected';?>><?=$book->name;?></option>
            <?php endforeach; ?>
        </select>


        <label for="count">Count:</label>
        <input type="number" class="form-control" name="count" value="{{$ordered->count}}">

        <label for="book_price">Price:</label>
        <input type="number" class="form-control" name="book_price" value="{{$ordered->book_price}}">


        <br>

        <button class="btn btn-success">Submit</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
