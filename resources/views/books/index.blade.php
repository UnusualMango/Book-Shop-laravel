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
        <?php foreach ($books as $book): ?>

        <tr>
          <td>{{$book->book_id}}</td>
          <td>{{$book->name}}</td>
          <td>{{$book->price}}</td>
          <td>{{$book->count}}</td>
          <td>
            <a href="{{ route('books.show', $book->book_id)}}" class="btn btn-info" role="button">show</a>
            <a href="{{ route('books.edit', $book->book_id)}}" class="btn btn-success" role="button">edit</a>

            {!! Form::open(["method"=>"DELETE", 'route' => ['books.destroy', $book->book_id]]) !!}
            <button onclick="return confirm('Delete this book?')" class="btn btn-danger" role="button">delete</button>
            {!! Form::close() !!}
          </td>
        </tr>

        <?php endforeach; ?>

      </tbody>
    </thead>
</div>
@endsection
