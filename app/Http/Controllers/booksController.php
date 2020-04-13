<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\Http\Requests\createBooksRequest;
use App\Http\Requests\updateBookRequest;

// Подключаем компонент валидации в виде трейта
use Illuminate\Foundation\Validation\ValidatesRequests;

class booksController extends Controller
{
    // отправка в book/index.blade.php
    public function index()
    {
      $books = Books::all();
      return view('books.index' , ['books' => $books]);
    }

    // отправка в book/create.blade.php
    public function create()
    {
      return view('books.create');
    }

    //функция редактирования
    public function edit($book_id)
    {
      $selectedBook = Books::find($book_id);

      return view('books.edit', ['book' => $selectedBook]);
    }

    //обновление записи
    public function update(updateBookRequest $request, $book_id)
    {

      $selectedBook = Books::find($book_id);

      $selectedBook->fill($request->all());
      $selectedBook->save();

      return redirect()->route('books.index');
    }


    // Функция сохранения записи в БД
    public function store(createBooksRequest $request)
    {

      Books::create($request->all());

      /*
       создаём экземпляр модели Books и вставляем в поля данные из формы

      $book = new Books;
      $book->fill($request->all());

      встроенная функция ORM для сохранения записи
      при использовании функции save() или create(), так же
      создаются поля в бд под названием updated_at и created_at.
      Чтобы этого не было, нужно в классе модели задать свойство
      public $timestamps = false;

      $book->save();
      */

      // перенаправление на book/index.blade.php
      return redirect()->route('books.index');

    }

    public function show($book_id)
    {
      $selectedBook = Books::find($book_id);

      return view('books.show', ['book' => $selectedBook]);
    }

    public function destroy($book_id)
    {
      Books::find($book_id)->delete();

      return redirect()->route('books.index');
    }
}
