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
            <td>Книга</td>
            <td>Цена</td>
            <td>Количество</td>
          </tbody>
        </thead>
      </table>

    </div>
</div>
@endsection
