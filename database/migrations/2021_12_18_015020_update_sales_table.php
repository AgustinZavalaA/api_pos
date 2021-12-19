<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sales', function (Blueprint $table) {
            $table->integer('product_id');
            $table->integer('quantity');
            $table->float('individual_price');
            $table->float('total');
            $table->foreignId('sale_header_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sales', function (Blueprint $table) {
            $table->dropColumn('product_id');
            $table->dropColumn('quantity');
            $table->dropColumn('individual_price');
            $table->dropColumn('total');
            $table->dropForeign(['sale_header_id']);
        });
    }
}
