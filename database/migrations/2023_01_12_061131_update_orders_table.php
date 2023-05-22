<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            // $table->unsignedInteger('user_id')->change();
            $table->unsignedBigInteger('warnaPakaian')->change();
            $table->unsignedBigInteger('paketPewangi')->change();
            $table->unsignedBigInteger('regionId')->change();
            $table->unsignedBigInteger('status')->change();
            $table->unsignedBigInteger('payment_id')->change();
        });

        Schema::table('orders', function ($table) {
            // $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('warnaPakaian')->references('id')->on('colors');
            $table->foreign('paketPewangi')->references('id')->on('fragrances');
            $table->foreign('regionId')->references('id')->on('regions');
            $table->foreign('status')->references('id')->on('detail_status');
            $table->foreign('payment_id')->references('id')->on('payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fragrances');
    }
};
