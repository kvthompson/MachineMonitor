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
		'machine' => '1',
		'oee' => '36',
		'performance' => '40',
		'availability' => '89',
		'quality' => '100'
	));

	 DB::table('oees')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'machine' => '2',
                'oee' => '76',
                'performance' => '83',
                'availability' => '91',
		'quality' => '100'
        ));

	 DB::table('oees')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'machine' => '3',
                'oee' => '30',
                'performance' => '30',
                'availability' => '99',
		'quality' => '100'
        ));

	 DB::table('oees')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'machine' => '4',
                'oee' => '88',
                'performance' => '91',
                'availability' => '96',
		'quality' => '100'
        ));
	
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         DB::table('oees')->where('quality', '=', '100')->delete();
    }
}
