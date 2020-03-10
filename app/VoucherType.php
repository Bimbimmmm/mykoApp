<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\VoucherType;
class VoucherType extends Model
{
  protected $table = 'voucher_type';
  protected $primaryKey = 'id';

  protected $fillable = [
        'name',
    ];

    public function vouchers()
    {
      return $this->hasMany('App\Voucher', 'id');
    }
}
