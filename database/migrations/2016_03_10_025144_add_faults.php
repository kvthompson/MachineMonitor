<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFaults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('faults')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'machine'=> 'Machine 3',
                'error' => 'Split Ring Valve Error'
        ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
