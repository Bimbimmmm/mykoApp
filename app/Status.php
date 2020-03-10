<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
  protected $table = 'status';
  protected $primaryKey = 'id';

  protected $fillable = [
        'name',
    ];

    public function vouchers()
    {
      return $this->hasMany('App\Voucher', 'id');
    }

    public function advertisings()
    {
      return $this->hasMany('App\Advertising', 'id');
    }
}
