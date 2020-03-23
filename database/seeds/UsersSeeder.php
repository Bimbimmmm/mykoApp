<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
  [
      'role_id' => '1',
      'id_card_number' => '',
      'fullname' => '',
      'username' => '',
      'place_of_birth' => '',
      'date_of_birth' => '',
      'phone_number' => '',
      'email' => '',
      'password' => Hash::make(''),
      'address' => '',
      'city' => '',
      'region' => '',
      'registration_number' => ''
  ]
  ]);
    }
}
