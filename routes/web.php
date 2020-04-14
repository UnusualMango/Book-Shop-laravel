<?php


/*---------------/
/-Роуты для книг-/
/--------------*/

// роут главной страницы для книг
Route::get('books', 'booksController@index')->name('books.index');
// роут создания книги
Route::get('books/create', 'booksController@create')->name('books.create');
// роут для сохранения записи книги в БД
Route::post('books/store', 'booksController@store')->name('books.store');
// роут для редактирования книги
Route::get('books/{book_id}/edit', 'booksController@edit')->name('books.edit');
Route::put('book/{book_id}/update','booksController@update')->name('books.update');
// роут для показа
Route::get('books/{book_id}/show', 'booksController@show')->name('books.show');
// роут для удаления
Route::delete('books/{book_id}/destroy', 'booksController@destroy')->name('books.destroy');


/*---------------/
/-Роуты для клиентов-/
/--------------*/


// роут главной страницы для клиентов
Route::get('clients', 'clientsController@index')->name('clients.index');
// роут создания клиента
Route::get('clients/create', 'clientsController@create')->name('clients.create');
// роут для записи клиента в БД
Route::post('clients/store', 'clientsController@store')->name('clients.store');
// роут для редактирования данных клиента
Route::get('clients/{client_id}/edit', 'clientsController@edit')->name('clients.edit');
Route::put('clients/{client_id}/update','clientsController@update')->name('clients.update');
// роут для показа
Route::get('clients/{client_id}/show', 'clientsController@show')->name('clients.show');
// роут для удаления
Route::delete('clients/{client_id}/destroy', 'clientsController@destroy')->name('clients.destroy');
