<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElAgentUserRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('el_agent_user_relation', function (Blueprint $table) {
			$table->increments('id');
	    	$table->integer('agent_id')->comment('分销商ID');
	    	$table->integer('user_id')->comment('用户ID');
		    $table->timestamps();
		    $table->softDeletes();
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::drop('el_agent_user_relation');
    }
}
