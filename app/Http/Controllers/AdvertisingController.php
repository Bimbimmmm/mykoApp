<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvertisingController extends Controller
{
  public function index(){
    return view('advertising/index');
  }

  public function add(){
    return view('advertising/add');
  }

  public function edit(){
    return view('');
  }
  public function delete(){
    return view('');
  }
}
