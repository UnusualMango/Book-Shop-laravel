@extends('layout')

@section('content')
<div class="container">
  <h2>Publishers
    <a href="{{ route('publishers.create')}}" class="btn btn-success">Create</a>
  </h2>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>City</th>
        <th>Actions</th>
      </tr>

      <tbody>
        <?php foreach ($publishers as $publisher): ?>

        <tr>
          <td>{{$publisher->publisher_id}}</td>
          <td>{{$publisher->name}}</td>
          <td>{{$publisher->city}}</td>
          <td>
            <a href="{{ route('publishers.edit', $publisher->publisher_id)}}" class="btn btn-success" role="button">edit</a>

            {!! Form::open(["method"=>"DELETE", 'route' => ['publishers.destroy', $publisher->publisher_id]]) !!}
            <button onclick="return confirm('Delete this publisher?')" class="btn btn-danger" role="button">delete</button>
            {!! Form::close() !!}
          </td>
        </tr>

        <?php endforeach; ?>

      </tbody>
    </thead>
</div>
@endsection
