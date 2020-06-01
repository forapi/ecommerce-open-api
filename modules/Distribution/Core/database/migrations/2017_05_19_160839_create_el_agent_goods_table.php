<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElAgentGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('el_agent_goods', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('goods_id')->comment('商品ID');
			$table->tinyInteger('activity')->default(1)->comment('是否参与推广 0：不参与  1：参与');
		    $table->float('rate')->comment('佣金比例');
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
	    Schema::drop('el_agent_goods');
    }
}
