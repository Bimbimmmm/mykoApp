<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class editor extends Model
{
  public function index() {
    return $this->belongsTo("editor\index");
  }
}
