<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\AuthorsBooks;
use App\Authors;
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
      $selectedAuthorBooks = AuthorsBooks::find($book_id);

      return view('books.edit', ['book' => $selectedBook, 'authorsbooks'=>$selectedAuthorBooks]);
    }

    //обновление записи
    public function update(updateBookRequest $request, $book_id)
    {

      $selectedBook = Books::find($book_id);

      $selectedBook->fill($request->all());
      $selectedBook->save();

      $selectedAuthorBooks = AuthorsBooks::find($book_id);
      $selectedAuthorBooks->fill($request->all());
      $selectedAuthorBooks->save();

      return redirect()->route('books.index');
    }


    // Функция сохранения записи в БД
    public function store(createBooksRequest $request)
    {
      $book = Books::create($request->all());
      $bookId = $book->book_id;

      $authorsBooks = new AuthorsBooks;

      $authorsBooks->book_id = $bookId;
      $authorsBooks->author_id = $request->author_id;

      $authorsBooks->save();

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
