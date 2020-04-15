<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
  // выключение создания полей updated_at и created_at в БД
  public $timestamps = false;
  protected $primaryKey = 'author_id';
  // массив для полей, которые могут заполнятся
  protected $fillable = ['authorname','birth_date','country'];

  public function Books()
  {
      return $this->belongsTo('App\Books');
  }
}
