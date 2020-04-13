@extends('layout')

@section('content')

@include('errors')
<div class="container">
  <h1>{{$book->name}}</h1>
    <div class="col-md-12">
      <table class="table table-striped">
      <thead>
        <tr>
          <th>ID:</th>
          <th>{{$book->book_id}}</th>
        </tr>

        <tbody>
          <tr>
            <td>Year of publishing:</td>
            <td>{{$book->year}}</td>
          </tr>

          <tr>
            <td>Price:</td>
            <td>{{$book->price}}</td>
          </tr>

          <tr>
            <td>Count:</td>
            <td>{{$book->count}}</td>
          </tr>

          <tr>
            <td>Publisher:</td>
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
            <td>Supplier: </td>
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
            <td>Genre: </td>
            <td>
              <?
              $results = DB::select('select * from genre');

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

        </tbody>
      </thead>
    </div>
</div>
@endsection
