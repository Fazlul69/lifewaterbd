<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReversesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reverses', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->string('brand');
            $table->string('capacity');
            $table->string('original');
            $table->string('membrane');
            $table->string('filter_stage');
            $table->string('size');
            $table->string('reserve_capacity');
            $table->string('technology');
            $table->string('warranty');
            $table->string('price')->nullable();
            $table->string('discount_price')->nullable();
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
        Schema::dropIfExists('reverses');
    }
}
