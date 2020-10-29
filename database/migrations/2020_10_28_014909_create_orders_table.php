<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order', 255);
            $table->string('shippping_name', 255);
            $table->string('shipping_phono', 150);
            $table->string('shipping_address', 255);
            $table->string('shipping_cc', 60);
            $table->string('sender_name', 255);
            $table->string('sender_phono', 150);
            $table->string('sender_address', 255);
            $table->string('sender_cc', 60);
            $table->string('sender_email', 150);
            $table->string('type', 255);
            $table->integer('weight');
            $table->string('variable', 255);
            $table->string('shipping_subtotal', 100);
            $table->string('invice_no', 255);
            $table->tinyInteger('qty');
            $table->string('book_mode', 100);
            $table->integer('declarate');
            $table->integer('freight');
            $table->string('mode', 150);
            $table->date('pick_date');
            $table->date('schedule');
            $table->string('pick_time', 200);
            $table->string('status', 150);
            $table->text('comment');
            $table->date('book_date');
            $table->string('delivered_status');
            $table->string('office_name', 150);
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
        Schema::dropIfExists('orders');
    }
}