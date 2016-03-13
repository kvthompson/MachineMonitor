<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oees', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
	    $table->integer('machine');
	    $table->integer('oee');
	    $table->integer('performance');
	    $table->integer('availability');
	    $table->integer('quality');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('oees');
    }
}
