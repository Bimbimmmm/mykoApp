<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
  protected $table = 'voucher';
  protected $primaryKey = 'id';

  protected $fillable = [
        'voucher_type_id', 'name', 'point_required', 'valid', 'expire', 'description', 'is_active', 'image'
    ];

    public function vouchertype()
    {
      return $this->belongsTo('App\VoucherType', 'voucher_type_id');
    }

    public function voucherstatus()
    {
      return $this->belongsTo('App\Status', 'is_active');
    }

}
