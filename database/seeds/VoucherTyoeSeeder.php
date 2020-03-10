<?php

use Illuminate\Database\Seeder;

class VoucherTyoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('voucher_type')->insert([
  [
      'name' => 'Room Voucher'
  ],
  [
      'name' => 'Food & Beverages Voucher'
  ],
  [
      'name' => 'Discount Voucher'
  ],
  [
      'name' => 'Cashback Voucher'
  ]
]);
    }
}
