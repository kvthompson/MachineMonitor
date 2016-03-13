<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMonthlyoees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          DB::table('monthlyoees')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> 'January',
                'year' => '2015',
		'oee' => '72'
        ));

	DB::table('monthlyoees')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> 'February',
                'year' => '2015',
		       'oee' => '68'
        ));

	DB::table('monthlyoees')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> 'March',
                'year' => '2015',
		       'oee' => '77'
        ));

	DB::table('monthlyoees')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> 'April',
                'year' => '2015',
		       'oee' => '86'
        ));

	DB::table('monthlyoees')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> 'May',
                'year' => '2015',
		       'oee' => '92'
        ));

	DB::table('monthlyoees')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> 'June',
                'year' => '2015',
		       'oee' => '98'
        ));

	DB::table('monthlyoees')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> 'July',
                'year' => '2015',
		       'oee' => '74'
        ));

	DB::table('monthlyoees')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> 'August',
                'year' => '2015',
		       'oee' => '83'
        ));

	DB::table('monthlyoees')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> 'September',
                'year' => '2015',
		       'oee' => '68'
        ));

	DB::table('monthlyoees')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> 'October',
                'year' => '2015',
		       'oee' => '63'
        ));

	DB::table('monthlyoees')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> 'November',
                'year' => '2015',
		       'oee' => '78'
        ));

	DB::table('monthlyoees')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> 'December',
                'year' => '2015',
		       'oee' => '85'
        ));

	DB::table('monthlyoees')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> 'January',
                'year' => '2016',
		       'oee' => '61'
        ));

	DB::table('monthlyoees')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> 'February',
                'year' => '2016',
		       'oee' => '81'
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
