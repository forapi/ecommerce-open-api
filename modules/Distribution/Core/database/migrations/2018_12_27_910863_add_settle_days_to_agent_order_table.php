<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSettleDaysToAgentOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('el_agent_order', function (Blueprint $table) {
            $table->integer('settle_days')->nullable()->default(0);  //结算周期：用于猫大手动添加佣金记录
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
            $table->dropColumn('settle_days');
        });
    }
}
