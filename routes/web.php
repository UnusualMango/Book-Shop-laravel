<?php

// Роуты для книг

// роут главной страницы для книг
Route::get('books', 'booksController@index')->name('books.index');
// роут создания книги
Route::get('books/create', 'booksController@create')->name('books.create');
// роут для сохранения записи книги в БД
Route::post('books/store', 'booksController@store')->name('books.store');
