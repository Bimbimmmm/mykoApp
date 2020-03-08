<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedeemedController extends Controller
{
  public function index(){
    return view('redeemed/index');
  }

  public function delete(){
    return view('');
  }
}
