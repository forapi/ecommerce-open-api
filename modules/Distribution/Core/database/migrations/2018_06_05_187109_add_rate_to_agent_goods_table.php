<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRateToAgentGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('el_agent_goods', function (Blueprint $table) {
            $table->float('rate_organ')->default(0);  //机构推客佣金比例
            $table->float('rate_shop')->default(0); //门店推客佣金比例
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('el_agent_goods', function (Blueprint $table) {
            $table->dropColumn(['rate_organ', 'rate_shop']);
        });
    }
}
