<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSettleTimeToAgentOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('el_agent_order', function (Blueprint $table) {
            $table->dateTime('settle_time')->nullable()->comment('结算时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('el_agent_order', function (Blueprint $table) {
            $table->dropColumn(['settle_time']);
        });
    }
}
