<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    // выключение создания полей updated_at и created_at в БД
    public $timestamps = false;
    protected $primaryKey = 'order_id';
    // массив для полей, которые могут заполнятся
    protected $fillable = ['client_id','order_date','execution_date'];

    public function Clients()
    {
      return $this->belongsTo('App\Clients');
    }
}
