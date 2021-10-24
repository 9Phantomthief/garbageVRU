<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGarbagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garbages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->nullable();
            $table->float('garbageA')->nullable();
            $table->float('garbageB')->nullable();
            $table->float('garbageC')->nullable();
            $table->float('garbageD')->nullable();
            $table->string('other')->nullable();
            $table->float('valueOther')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('garbages');
    }
}
