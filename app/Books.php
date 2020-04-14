<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Books extends Model
{
  // выключение создания полей updated_at и created_at в БД
  public $timestamps = false;
  protected $primaryKey = 'book_id';
  // массив для полей, которые могут заполнятся
  protected $fillable = ['name','year','count','price','publisher_id','supplier_id','genre_id'];

  public function Publishers()
  {
      return $this->belongsTo('App\Publishers');
  }

  public function Suppliers()
  {
      return $this->belongsTo('App\Suppliers');
  }

  public function Genres()
  {
      return $this->belongsTo('App\Genres');
  }
}
