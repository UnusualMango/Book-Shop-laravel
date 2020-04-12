<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Books extends Model
{
  // выключение создания полей updated_at и created_at в БД
  public $timestamps = false;
  // массив для полей, которые могут заполнятся
  protected $fillable = ['name','year','count','price'];

  public function Publishers()
  {
      return $this->belongsTo('App\Publishers');
  }
}
