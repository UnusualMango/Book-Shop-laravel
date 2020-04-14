<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genres;
use App\Http\Requests\createGenresRequest;
use App\Http\Requests\updateGenresRequest;

use Illuminate\Foundation\Validation\ValidatesRequests;
class genresController extends Controller

{
  public function index()
  {
    $genres = Genres::all();
    return view('genres.index' , ['genres' => $genres]);
  }

  public function destroy($genre_id)
  {
    Genres::find($genre_id)->delete();

    return redirect()->route('genres.index');
  }

  // отправка в genres/create.blade.php
  public function create()
  {
    return view('genres.create');
  }

  //функция редактирования
  public function edit($genre_id)
  {
    $selectedGenre = Genres::find($genre_id);

    return view('genres.edit', ['genre' => $selectedGenre]);
  }

  //обновление записи
  public function update(updateGenresRequest $request, $genre_id)
  {

    $selectedGenre = Genres::find($genre_id);

    $selectedGenre->fill($request->all());
    $selectedGenre->save();

    return redirect()->route('genres.index');
  }


  // Функция сохранения записи в БД
  public function store(createGenresRequest $request)
  {

    Genres::create($request->all());

    return redirect()->route('genres.index');

  }
}
