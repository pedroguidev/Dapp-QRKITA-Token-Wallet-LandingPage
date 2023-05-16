<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStripeTokenAtBuyCoinHistories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('buy_coin_histories', function (Blueprint $table) {
            $table->string('stripe_token')->nullable()->after('phase_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('buy_coin_histories', function (Blueprint $table) {
            $table->dropColumn('stripe_token');
        });
    }
}
