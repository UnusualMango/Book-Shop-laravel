<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publishers extends Model
{
  public function Books()
  {
      return $this->belongsTo('App\Books');
  }
}
