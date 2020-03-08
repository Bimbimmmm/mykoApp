<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('role')->insert([
  [
      'role' => 'Administrator'
  ],
  [
      'role' => 'Member'
  ],
  [
      'role' => 'Front Office'
  ],
  [
      'role' => 'Editor'
  ]
]);
    }
}
