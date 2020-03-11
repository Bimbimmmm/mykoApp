<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Voucher;
use App\VoucherType;
use App\Status;

class VoucherController extends Controller
{
  public function index(){
    $datas = Voucher::paginate(10);
    $datass = Voucher::where('is_active', '1')
    ->paginate(10)
    ->appends(request()->query());
    return view('voucher/index',compact('datas' , 'datass'));

  }

  public function view($id){
    $datas = Voucher::where('id',$id)->get();
    $datass = Status::all();
    return view('voucher/view',compact('datas', 'datass'));
  }

  public function show(){
    $datas = VoucherType::all();
    $datass = Status::all();
    return view('voucher/add',compact('datas', 'datass'));
  }

  public function store(Request $request){
    $request->validate([
      'voucher_type_id' => 'required',
      'name' => 'required',
      'point_required' => 'required',
      'valid' => 'required',
      'expire' => 'required',
      'description' => 'required',
      'is_active',
      'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('image'), $imageName);

    DB::table('voucher')->insert([
      'voucher_type_id' => $request->voucher_type_id,
      'name' => $request->name,
      'point_required' => $request->point_required,
      'valid' => $request->valid,
      'expire' => $request->expire,
      'description' =>$request->description,
      'is_active' => $request->is_active,
      'image' => $imageName
    ]);


    return redirect('voucher');
  }
  public function update(Request $request, $id){
    $validasi = $request->validate([
      'voucher_type_id' => 'required',
      'name' => 'required',
      'point_required' => 'required',
      'valid' => 'required',
      'expire' => 'required',
      'description' => 'required',
      'is_active',
      'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    if ($request->image == null) {
      Voucher::whereId($id)->update([
        'voucher_type_id' => $request->voucher_type_id,
        'name' => $request->name,
        'point_required' => $request->point_required,
        'valid' => $request->valid,
        'expire' => $request->expire,
        'description' =>$request->description,
        'is_active' => $request->is_active
      ]);
    }else{
      $imageName = time().'.'.$request->image->extension();
      $request->image->move(public_path('image'), $imageName);
      Voucher::whereId($id)->update([
        'voucher_type_id' => $request->voucher_type_id,
        'name' => $request->name,
        'point_required' => $request->point_required,
        'valid' => $request->valid,
        'expire' => $request->expire,
        'description' =>$request->description,
        'is_active' => $request->is_active,
        'image' => $imageName
      ]);
    }
    return redirect('voucher');
  }

  public function edit($id){
    $datas = Voucher::where('id',$id)->get();
    $datass = Status::all();
    return view('voucher/edit',compact('datas', 'datass'));
  }
  public function destroy($id){
    $voucher = Voucher::findOrFail($id);
    unlink(public_path() .  '/image/' . $voucher->image );
    $voucher->delete();


    return redirect('voucher')->with('success', 'Data berhasil dihapus!');
  }
}
