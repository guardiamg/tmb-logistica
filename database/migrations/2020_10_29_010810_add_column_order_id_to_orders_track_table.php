<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnOrderIdToOrdersTrackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders_track', function (Blueprint $table) {
            $table->unsignedInteger('order_id')->after('id');
            $table->foreign('order_id')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders_track', function (Blueprint $table) {
            $table->dropForeign('order_id');
            $table->dropColumn('order_id');
        });
    }
}
