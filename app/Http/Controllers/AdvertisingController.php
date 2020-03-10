<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Advertising;
use App\AdvertisingType;
use App\Status;

class AdvertisingController extends Controller
{
  public function index(){
    $datas = Advertising::paginate(10);
    return view('advertising/index',compact('datas'));
  }

  public function show(){
    $datas = AdvertisingType::all();
    $datass = Status::all();
    return view('advertising/add',compact('datas', 'datass'));
  }

  public function view($id){
    $datas = Advertising::where('id',$id)->get();
    $datass = Status::all();
    return view('advertising/view',compact('datas', 'datass'));
  }

  public function store(Request $request){
    $request->validate([
      'advertising_type_id' => 'required',
      'name' => 'required',
      'caption' => 'required',
      'description' => 'required',
      'url',
      'is_active',
      'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('image'), $imageName);

    DB::table('advertising')->insert([
      'advertising_type_id' => $request->advertising_type_id,
      'name' => $request->name,
      'caption' => $request->caption,
      'description' => $request->description,
      'url' => $request->url,
      'description' =>$request->description,
      'is_active' => $request->is_active,
      'image' => $imageName
    ]);
    return redirect('advertising');
  }

  public function edit($id){
    $datas = Advertising::where('id',$id)->get();
    $datass = Status::all();
    return view('advertising/edit',compact('datas', 'datass'));
  }

  public function update(Request $request, $id){
    $validasi = $request->validate([
      'advertising_type_id' => 'required',
      'name' => 'required',
      'caption' => 'required',
      'description' => 'required',
      'url',
      'is_active',
      'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    if ($request->image == null) {
      Advertising::whereId($id)->update([
        'advertising_type_id' => $request->advertising_type_id,
        'name' => $request->name,
        'caption' => $request->caption,
        'description' => $request->description,
        'url' => $request->url,
        'description' =>$request->description,
        'is_active' => $request->is_active
      ]);
    }else{
      $imageName = time().'.'.$request->image->extension();
      $request->image->move(public_path('image'), $imageName);
      Advertising::whereId($id)->update([
        'advertising_type_id' => $request->advertising_type_id,
        'name' => $request->name,
        'caption' => $request->caption,
        'description' => $request->description,
        'url' => $request->url,
        'description' =>$request->description,
        'is_active' => $request->is_active,
        'image' => $imageName
      ]);
    }
    return redirect('advertising');
  }

  public function destroy($id){
    $advertising = Advertising::findOrFail($id);
    unlink(public_path() .  '/image/' . $advertising->image );
    $advertising->delete();
    return redirect('voucher')->with('success', 'Data berhasil dihapus!');
  }
}
