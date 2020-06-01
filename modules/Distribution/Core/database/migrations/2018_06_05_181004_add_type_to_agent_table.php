<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTypeToAgentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('el_agent', function (Blueprint $table) {
            $table->tinyInteger('type')->default(1);  //分销员类型：1 普通；2 机构；3 门店
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('el_agent', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
}
