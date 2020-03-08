<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class FrontofficeController extends Controller
{
  public function index(){
    $datas = User::where('role_id', '3')
    ->paginate(10)
    ->appends(request()->query());
    return view('frontoffice/index',compact('datas'));
  }

  public function edit($id){
    $data = User::where('id',$id)->get();
    return view('frontoffice/edit',compact('data'));
  }

  public function update(Request $request, $id){

    $validasi = $request->validate([
      'role_id' => 'required',
      'id_card_number' => 'required',
      'fullname' => 'required',
      'username' => 'required',
      'phone_number' => 'required',
      'email' => 'required',
      'password' => ['required', 'string', 'min:8', 'confirmed'],
      'address' => 'required',
      'city' => 'required',
      'region' => 'required',
      'registration_number',
    ]);
    User::whereId($id)->update([
      'role_id' => $request->role_id,
      'id_card_number' => $request->id_card_number,
      'fullname' => $request->fullname,
      'username' => $request->username,
      'phone_number' => $request->phone_number,
      'email' => $request->email,
      'password' => Hash::make($request['password']),
      'address' => $request->address,
      'city' => $request->city,
      'region' => $request->region,
      'registration_number' => $request->registration_number
    ]);return redirect('fo');
  }

  public function destroy($id){

    $users = User::findOrFail($id);
    $users->delete();

    return redirect('fo')->with('success', 'Data berhasil dihapus!');
  }
}
