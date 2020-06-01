<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUniqueIndexToCodeElAgent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('el_agent', function (Blueprint $table) {
		    $table->unique('code', 'el_agent_code_unique');
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
		    $table->dropUnique('el_agent_code_unique');
	    });
    }
}
