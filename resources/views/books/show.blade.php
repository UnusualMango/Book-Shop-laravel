@extends('layout')

@section('content')

@include('errors')
<div class="container">
  <h2>{{$book->name}}</h2>
    <div class="col-md-12">
      <table class="table table-striped">
      <thead>
        <tr>
          <th>ID:</th>
          <td>{{$book->book_id}}</td>
        </tr>

        <tbody>
          <tr>
            <th>Year of publishing:</th>
            <td>{{$book->year}}</td>
          </tr>

          <tr>
            <th>Price:</th>
            <td>{{$book->price}}</td>
          </tr>

          <tr>
            <th>Count:</th>
            <td>{{$book->count}}</td>
          </tr>

          <tr>
            <th>Publisher:</th>
            <td>
              <?
              $results = DB::select('select * from publishers');

              foreach ($results as $result)
              {
                if($result->publisher_id == $book->publisher_id)
                {
                  echo "$result->name";
                }
              }
              ?>
            </td>
          </tr>

          <tr>
            <th>Supplier: </th>
            <td>
              <?
              $results = DB::select('select * from suppliers');

              foreach ($results as $result)
              {
                if($result->supplier_id == $book->supplier_id)
                {
                  echo "$result->name";
                }
              }
              ?>
            </td>
          </tr>

          <tr>
            <th>Genre: </th>
            <td>
              <?
              $results = DB::select('select * from genres');

              foreach ($results as $result)
              {
                if($result->genre_id == $book->genre_id)
                {
                  echo "$result->genre";
                }
              }
              ?>
            </td>
          </tr>

          <tr>
            <th>Authors: </th>
            <td>
              <?php
              $authorsbooks = DB::select("select * from authorsbooks where book_id = $book->book_id");
              foreach ($authorsbooks as $authorsbook): ?>

                  <?
                    $authors = DB::select("select * from authors where author_id = $authorsbook->author_id");
                    foreach ($authors as $author) {
                      echo $author->authorname;
                    }
                  ?>
                <?php endforeach; ?>
            </td>
          </tr>
        </tbody>
      </thead>
    </div>
</div>
@endsection
