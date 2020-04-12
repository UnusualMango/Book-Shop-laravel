@extends('layout')

@section('content')
<div class="container">
  <h1>Books</h1>
    <a href="{{ route('books.create')}}" class="btn btn-success">Create</a>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Count</th>
        <th>Actions</th>
      </tr>

      <tbody>

        <tr>
          <td>1</td>
          <td>Name</td>
          <td>123</td>
          <td>1</td>
          <td>
            <a href="#" class="btn btn-info" role="button">show</a>
            <a href="#" class="btn btn-success" role="button">edit</a>
            <a href="#" class="btn btn-danger" role="button">delete</a>
          </td>
        </tr>

      </tbody>
    </thead>
</div>
@endsection
