@extends('layout')

@section('content')
<div class="container">
  <h2>Authors
    <a href="{{ route('authors.create')}}" class="btn btn-success">Add author</a>
  </h2>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Actions</th>
      </tr>

      <tbody>
        <?php foreach ($authors as $author): ?>

        <tr>
          <td>{{$author->author_id}}</td>
          <td>{{$author->authorname}}</td>
          <td>
            <a href="{{ route('authors.show', $author->author_id)}}" class="btn btn-info" role="button">show</a>
            <a href="{{ route('authors.edit', $author->author_id)}}" class="btn btn-success" role="button">edit</a>

            {!! Form::open(["method"=>"DELETE", 'route' => ['authors.destroy', $author->author_id]]) !!}
            <button onclick="return confirm('Delete this author?')" class="btn btn-danger" role="button">delete</button>
            {!! Form::close() !!}
          </td>
        </tr>

        <?php endforeach; ?>

      </tbody>
    </thead>
</div>
@endsection
