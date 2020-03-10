<?php

use Illuminate\Database\Seeder;

class AdvertisingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('advertising_type')->insert([
  [
      'name' => 'Room Advertising'
  ],
  [
      'name' => 'Ballroom Advertising'
  ],
  [
      'name' => 'Restaurant Advertising'
  ],
  [
      'name' => 'Facilities Advertising'
  ],
  [
      'name' => 'Promo Advertising'
  ]
]);
    }
}
