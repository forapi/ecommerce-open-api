<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElAgentRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('el_agent_relation', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('level')->comment('相对等级');
			$table->integer('parent_agent_id')->comment('agent_id的父ID');
			$table->integer('agent_id')->comment('分销商ID');
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
	    Schema::dropIfExists('el_agent_relation');
    }
}
