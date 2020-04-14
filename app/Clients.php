<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
  // выключение создания полей updated_at и created_at в БД
  public $timestamps = false;
  protected $primaryKey = 'client_id';
  // массив для полей, которые могут заполнятся
  protected $fillable = ['fullname','city','adress','phone'];
}
