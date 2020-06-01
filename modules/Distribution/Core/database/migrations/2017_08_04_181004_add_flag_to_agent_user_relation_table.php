<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFlagToAgentUserRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('el_agent_user_relation', function (Blueprint $table) {
            $table->tinyInteger('flag')->after('user_id')->default(2);  //是否是新用户：1 是  2否
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('el_agent_user_relation', function (Blueprint $table) {
            $table->dropColumn('flag');
        });
    }
}
