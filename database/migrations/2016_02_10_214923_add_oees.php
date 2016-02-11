<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('oees')->insert(array(
		'created_at'=>date('Y-m-d H:m:s'),
		'updated_at'=>date('Y-m-d H:m:s'),
		'm1oee' => '90',
		'm2oee' => '40',
		'm3oee' => '20',
		'm4oee' => '80'
	));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('oees')->where('m1oee', '=', '90')->delete();
	DB::table('oees')->where('m1oee', '=', '70')->delete();
    }
}
