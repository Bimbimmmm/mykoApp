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
      'id_card_number' => '7371121305980005',
      'fullname' => 'Bima Satria Yudha Mohammad',
      'username' => 'bimsatriaa',
      'place_of_birth' => 'Parepare',
      'date_of_birth' => '1998-05-13',
      'phone_number' => '081241975243',
      'email' => 'bimasatriayudha1398@gmail.com',
      'password' => Hash::make('namamuji'),
      'address' => 'Nusa Tamalanrea Indah Blok QE.5',
      'city' => 'Makassar',
      'region' => 'Indonesia',
      'registration_number' => '200205010'
  ]
  ]);
    }
}
