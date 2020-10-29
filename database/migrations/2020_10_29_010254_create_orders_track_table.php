<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTrackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_track', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_track', 255);
            $table->string('pick_time', 150);
            $table->string('status', 255);
            $table->text('comment');
            $table->datetime('bk_time');
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
        Schema::dropIfExists('orders_track');
    }
}
