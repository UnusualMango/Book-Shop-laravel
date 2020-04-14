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


/*---------------/
/-Роуты для жанров-/
/--------------*/


// роут главной страницы для жанров
Route::get('genres', 'genresController@index')->name('genres.index');
// роут создания жанра
Route::get('genres/create', 'genresController@create')->name('genres.create');
// роут для записи жанра в БД
Route::post('genres/store', 'genresController@store')->name('genres.store');
// роут для редактирования жанра
Route::get('genres/{genre_id}/edit', 'genresController@edit')->name('genres.edit');
Route::put('genres/{genre_id}/update','genresController@update')->name('genres.update');
// роут для удаления жанра
Route::delete('genres/{genre_id}/destroy', 'genresController@destroy')->name('genres.destroy');


/*---------------/
/-Роуты для издателей-/
/--------------*/


// роут главной страницы для издателей
Route::get('publishers', 'publishersController@index')->name('publishers.index');
// роут создания издателя
Route::get('publishers/create', 'publishersController@create')->name('publishers.create');
// роут для записи издателя в БД
Route::post('publishers/store', 'publishersController@store')->name('publishers.store');
// роут для редактирования данных издателя
Route::get('publishers/{publisher_id}/edit', 'publishersController@edit')->name('publishers.edit');
Route::put('publishers/{publisher_id}/update','publishersController@update')->name('publishers.update');
// роут для удаления издателя
Route::delete('publishers/{publisher_id}/destroy', 'publishersController@destroy')->name('publishers.destroy');


/*---------------/
/-Роуты для поставщиков-/
/--------------*/


// роут главной страницы для клиентов
Route::get('suppliers', 'suppliersController@index')->name('suppliers.index');
// роут создания клиента
Route::get('suppliers/create', 'suppliersController@create')->name('suppliers.create');
// роут для записи клиента в БД
Route::post('suppliers/store', 'suppliersController@store')->name('suppliers.store');
// роут для редактирования данных клиента
Route::get('suppliers/{supplier_id}/edit', 'suppliersController@edit')->name('suppliers.edit');
Route::put('suppliers/{supplier_id}/update','suppliersController@update')->name('suppliers.update');
// роут для показа
Route::get('suppliers/{supplier_id}/show', 'suppliersController@show')->name('suppliers.show');
// роут для удаления
Route::delete('suppliers/{supplier_id}/destroy', 'suppliersController@destroy')->name('suppliers.destroy');
