<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ToeicData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('ToeicData', function(Blueprint $table)
        {
          $table->increments('id');
          $table->String('words');
          $table->integer('all');
          $table->integer('aa');
          $table->integer('ar');
          $table->integer('as');
          $table->integer('be');
          $table->integer('ge');
          $table->integer('sc');
          $table->integer('ss');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ToeicData');
    }
}
