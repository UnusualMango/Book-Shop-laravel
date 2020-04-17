<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthorsBooks extends Model
{
  // выключение создания полей updated_at и created_at в БД
  public $table = 'authorsbooks';
  public $timestamps = false;
  protected $primaryKey = 'book_id';
  // массив для полей, которые могут заполнятся
  protected $fillable = ['book_id','author_id'];
}
