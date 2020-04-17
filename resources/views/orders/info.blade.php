@extends('layout')

@section('content')

@include('errors')
<div class="container">
  <h2>Order #{{$order->order_id}} </h2>
    <div class="col-md-12">
      <table class="table table-striped">
      <thead>
        <tbody>
          <tr>
            <th>Client:</th>
            <td>{{$clients->fullname}}</td>
          </tr>
          <tr>
            <th>Order date:</th>
            <td>{{$order->order_date}}</td>
          </tr>
          <tr>
            <th>Execution date:</th>
            <td>{{$order->execution_date}}</td>
          </tr>
        </tbody>
      </thead>
    </div>
    <div class="col-md-12">
      <table class="table table-striped">
        <thead>
            <th>Books:</th>
            <th>Price:</th>
            <th>Count:</th>
          <tbody>
            <?php
            $ordereds = DB::select("select * from ordered where order_id = $order->order_id");
            foreach ($ordereds as $ordered): ?>

            <tr>
              <td>
                <?
                  $books = DB::select("select * from books where book_id = $ordered->book_id");
                  foreach ($books as $book) {
                    echo $book->name;
                  }
                ?>
              </td>
              <td>{{$ordered->book_price}}</td>
              <td>{{$ordered->count}}</td>
            <tr>
              <?php endforeach; ?>
          </tbody>
        </thead>
      </table>

    </div>
</div>
@endsection
