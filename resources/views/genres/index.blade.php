@extends('layout')

@section('content')
<div class="container">
  <h2>Genres
    <a href="{{ route('genres.create')}}" class="btn btn-success">Create</a>
  </h2>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Genre</th>
      </tr>

      <tbody>
        <?php foreach ($genres as $genre): ?>

        <tr>
          <td>{{$genre->genre_id}}</td>
          <td>{{$genre->genre}}</td>
          <td>
            <a href="{{ route('genres.edit', $genre->genre_id)}}" class="btn btn-success" role="button">edit</a>
            {!! Form::open(["method"=>"DELETE", 'route' => ['genres.destroy', $genre->genre_id]]) !!}
            <button onclick="return confirm('Delete this genre?')" class="btn btn-danger" role="button">delete</button>
            {!! Form::close() !!}
          </td>
        </tr>

        <?php endforeach; ?>

      </tbody>
    </thead>
</div>
@endsection
