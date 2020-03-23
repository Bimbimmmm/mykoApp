<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoucherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('voucher_type_id');
          $table->string('name');
          $table->integer('point_required');
          $table->date('valid');
          $table->date('expire');
          $table->string('description');
          $table->integer('is_active');
          $table->string('image');
          $table->foreign('voucher_type_id')->references('id')->on('voucher_type');
          $table->foreign('is_active')->references('id')->on('status');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voucher');
    }
}
