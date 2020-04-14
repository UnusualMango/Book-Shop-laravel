<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publishers extends Model
{
  public $timestamps = false;
  protected $primaryKey = 'publisher_id';
  // массив для полей, которые могут заполнятся
  protected $fillable = ['name','city'];

  public function Books()
  {
      return $this->belongsTo('App\Books');
  }
}
