<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
  public $timestamps = false;
  protected $primaryKey = 'supplier_id';
  // массив для полей, которые могут заполнятся
  protected $fillable = ['name','email','phone'];

  public function Books()
  {
      return $this->belongsTo('App\Books');
  }
}
