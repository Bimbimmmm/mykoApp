<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdvertisingType extends Model
{
  protected $table = 'advertising_type';
  protected $primaryKey = 'id';

  protected $fillable = [
        'name',
    ];

    public function advertisings()
    {
      return $this->hasMany('App\Advertising', 'id');
    }
}
