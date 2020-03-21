<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class AdminController extends Controller
{
  public function index(){
    $datas = User::where('role_id', '1')
    ->paginate(10)
    ->appends(request()->query());
    return view('admin/index',compact('datas'));
  }

  public function edit($id){
    $data = User::where('id',$id)->get();
    return view('admin/edit',compact('data'));
  }

  public function update(Request $request, $id){

    $validasi = $request->validate([
      'role_id' => 'required',
      'id_card_number' => 'required',
      'fullname' => 'required',
      'username' => 'required',
      'place_of_birth' => 'required',
      'date_of_birth' => 'required',
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
      'place_of_birth' => $request->place_of_birth,
      'date_of_birth' => $request->date_of_birth,
      'phone_number' => $request->phone_number,
      'email' => $request->email,
      'password' => Hash::make($request['password']),
      'address' => $request->address,
      'city' => $request->city,
      'region' => $request->region,
      'registration_number' => $request->registration_number
    ]);return redirect('admin');
  }

  public function destroy($id){

    $users = User::findOrFail($id);
    $users->delete();

    return redirect('admin')->with('success', 'Data berhasil dihapus!');
  }
}
