<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertising', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('advertising_type_id');
          $table->string('name');
          $table->string('caption');
          $table->string('description');
          $table->string('url')->nullable();
          $table->integer('is_active');
          $table->string('image');
          $table->foreign('advertising_type_id')->references('id')->on('advertising_type');
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
        Schema::dropIfExists('advertising');
    }
}
