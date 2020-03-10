<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('status')->insert([
  [
      'name' => 'Active'
  ],
  [
      'name' => 'Not Active'
  ]
  ]);
    }
}
