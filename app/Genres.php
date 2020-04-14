<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
  // выключение создания полей updated_at и created_at в БД
  public $timestamps = false;
  protected $primaryKey = 'genre_id';
  // массив для полей, которые могут заполнятся
  protected $fillable = ['genre'];

  public function Books()
  {
      return $this->belongsTo('App\Books');
  }
}
