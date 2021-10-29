<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersApiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_api', function (Blueprint $table) {
            $table->id();
            $table->string('product');
            $table->string('quantity');
            $table->string('price');
            $table->dateTime('time_of_dispatch');
            $table->dateTime('time_of_arrival');
            $table->string('name_of_handler');
            $table->string('name_of_reciever');

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
        Schema::dropIfExists('orders_api');
    }
}
