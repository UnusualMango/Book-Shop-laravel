@extends('layout')

@section('content')
<div class="container">
  <h2>Clients
    <a href="{{ route('clients.create')}}" class="btn btn-success">Add person</a>
  </h2>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Fullname</th>
        <th>Actions</th>
      </tr>

      <tbody>
        <?php foreach ($clients as $client): ?>

        <tr>
          <td>{{$client->client_id}}</td>
          <td>{{$client->fullname}}</td>
          <td>
            <a href="{{ route('client.orders', $client->client_id)}}" class="btn btn-warning" role="button">orders</a>
            <a href="{{ route('clients.show', $client->client_id)}}" class="btn btn-info" role="button">show</a>
            <a href="{{ route('clients.edit', $client->client_id)}}" class="btn btn-success" role="button">edit</a>

            {!! Form::open(["method"=>"DELETE", 'route' => ['clients.destroy', $client->client_id]]) !!}
            <button onclick="return confirm('Delete this person?')" class="btn btn-danger" role="button">delete</button>
            {!! Form::close() !!}

          </td>
        </tr>

        <?php endforeach; ?>

      </tbody>
    </thead>
</div>
@endsection
