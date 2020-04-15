<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Authors;
use App\Http\Requests\createAuthorsRequest;
use App\Http\Requests\updateAuthorsRequest;

use Illuminate\Foundation\Validation\ValidatesRequests;

class authorsController extends Controller
{
  public function index()
  {
    $authors = Authors::all();
    return view('authors.index' , ['authors' => $authors]);
  }

  public function destroy($author_id)
  {
    Authors::find($author_id)->delete();

    return redirect()->route('authors.index');
  }

  // отправка в authors/create.blade.php
  public function create()
  {
    return view('authors.create');
  }

  //функция редактирования
  public function edit($author_id)
  {
    $selectedAuthor = Authors::find($author_id);

    return view('authors.edit', ['author' => $selectedAuthor]);
  }

  //обновление записи
  public function update(updateAuthorsRequest $request, $author_id)
  {

    $selectedAuthor = Authors::find($author_id);

    $selectedAuthor->fill($request->all());
    $selectedAuthor->save();

    return redirect()->route('authors.index');
  }


  // Функция сохранения записи в БД
  public function store(createAuthorsRequest $request)
  {

    Authors::create($request->all());

    return redirect()->route('authors.index');

  }

  // Функция для показа полной информации
  public function show($author_id)
  {
    $selectedAuthor = Authors::find($author_id);

    return view('authors.show', ['author' => $selectedAuthor]);
  }
}
