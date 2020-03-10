<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertising extends Model
{
  protected $table = 'advertising';
  protected $primaryKey = 'id';

  protected $fillable = [
        'advertising_type_id', 'name', 'caption', 'description', 'url', 'is_active', 'image'
    ];

    public function advertisingtype()
    {
      return $this->belongsTo('App\AdvertisingType', 'advertising_type_id');
    }

    public function status()
    {
      return $this->belongsTo('App\Status', 'is_active');
    }
}
