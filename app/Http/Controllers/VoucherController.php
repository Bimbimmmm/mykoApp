<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoucherController extends Controller
{
  public function index(){
    return view('voucher/index');
  }

  public function add(){
    return view('voucher/add');
  }

  public function edit(){
    return view('');
  }
  public function delete(){
    return view('');
  }
}
