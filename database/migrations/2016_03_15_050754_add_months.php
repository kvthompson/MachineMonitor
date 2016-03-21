<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMonths extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
       DB::table('months')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> '0',
                'year' => '2015',
                'oee' => '67'
        ));

          DB::table('months')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> '1',
                'year' => '2015',
                'oee' => '82'
        ));

          DB::table('months')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> '2',
                'year' => '2015',
                'oee' => '94'
        ));

          DB::table('months')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> '3',
                'year' => '2015',
                'oee' => '85'
        ));

          DB::table('months')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> '4',
                'year' => '2015',
                'oee' => '72'
        ));

          DB::table('months')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> '5',
                'year' => '2015',
                'oee' => '75'
        ));

          DB::table('months')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> '6',
                'year' => '2015',
                'oee' => '77'
        ));

          DB::table('months')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> '7',
                'year' => '2015',
                'oee' => '88'
        ));

          DB::table('months')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> '8',
                'year' => '2015',
                'oee' => '91'
        ));

          DB::table('months')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> '9',
                'year' => '2015',
                'oee' => '81'
        ));

          DB::table('months')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> '10',
                'year' => '2015',
                'oee' => '84'
        ));

          DB::table('months')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> '11',
                'year' => '2015',
                'oee' => '73'
        ));

          DB::table('months')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> '0',
                'year' => '2016',
                'oee' => '56'
        ));

          DB::table('months')->insert(array(
                'created_at'=>date('Y-m-d H:m:s'),
                'updated_at'=>date('Y-m-d H:m:s'),
                'month'=> '1',
                'year' => '2016',
                'oee' => '62'
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
