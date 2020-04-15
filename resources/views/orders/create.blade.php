@extends('layout')

@section('content')
<div class="container">
  <h2>Create order</h2>

@include('errors')

  <div class="row">
    <div class="col-md-12">
      {!! Form::open(['route' => 'orders.store']) !!}
      <div class="form-group">
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

        <br>

        <button class="btn btn-success">Submit</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
