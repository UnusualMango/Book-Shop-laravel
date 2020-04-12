<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

class booksController extends Controller
{
    // отправка в book/index.blade.php
    public function index()
    {
      return view('books.index');
    }
    // отправка в book/create.blade.php
    public function create()
    {
      return view('books.create');
    }
    // Функция сохранения записи в БД
    public function store(Request $request)
    {
      // ещё есть exept и only $request->exept(['name']);
      //dd($request->all());

      // создаём экземпляр модели Books и вставляем в поля данные из формы
      $book = new Books;
      $book->fill($request->all());

      /*
      встроенная функция ORM для сохранения записи
      при использовании функции save() или create(), так же
      создаются поля в бд под названием updated_at и created_at.
      Чтобы этого не было, нужно в классе модели задать свойство
      public $timestamps = false;
      */
      $book->save();

      // перенаправление на book/index.blade.php
      return redirect()->route('books.index');

    }
}
