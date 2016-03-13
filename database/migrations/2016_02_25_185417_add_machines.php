<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMachines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	  DB::table('machines')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'machine' => '1',
                'batchNo' => '1',
                'partNo' => '15',
                'partType' => '6',
		'remainingQ' => '4',
		'totalQ' => '6'
        ));


	 DB::table('machines')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'machine' => '2',
                'batchNo' => '2',
                'partNo' => '13',
                'partType' => '2',
                'remainingQ' => '5',
                'totalQ' => '9'
        ));

	 DB::table('machines')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'machine' => '3',
                'batchNo' => '3',
                'partNo' => '2',
                'partType' => '16',
                'remainingQ' => '1',
                'totalQ' => '7'
        ));

	 DB::table('machines')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'machine' => '4',
                'batchNo' => '4',
                'partNo' => '11',
                'partType' => '1',
                'remainingQ' => '4',
                'totalQ' => '5'
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
