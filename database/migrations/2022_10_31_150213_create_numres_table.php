<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNumresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('numres', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_member')->nullable();
            $table->float('num_re')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('numres');
    }
}
