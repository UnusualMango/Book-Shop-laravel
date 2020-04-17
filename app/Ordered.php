<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordered extends Model
{
  // выключение создания полей updated_at и created_at в БД
  public $table = 'ordered';
  public $timestamps = false;
  protected $primaryKey = 'order_id';
  // массив для полей, которые могут заполнятся
  protected $fillable = ['book_id','order_id','count','book_price'];
}
