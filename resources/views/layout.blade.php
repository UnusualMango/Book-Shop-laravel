<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <title>Bookshop</title>
    <link rel="icon" href="../favicon.ico" >
    <style>

    form
    {
      display: inline;
    }

    </style>
  </head>
  <body>
    <div class="p-3 mb-2 bg-success text-light">
      <h1>BookShop</h1>
      <div class="offset-md-8 ">
        <a href="{{ route('books.index')}}" class="col-md-2 text-light" >Books</a>
        <a href="{{ route('genres.index')}}" class="col-md-2 text-light" >Genres</a>
        <a href="{{ route('publishers.index')}}" class="col-md-2 text-light" >Publishers</a>
        <a href="{{ route('suppliers.index')}}" class="col-md-2 text-light" >Suppliers</a>
        <a href="{{ route('clients.index')}}" class="col-md-2 text-light" >Clients</a>
      </div>
    </div>
    @yield('content')
  </body>
</html>
