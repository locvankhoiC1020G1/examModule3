<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('idworker')->nullable();
            $table->string('group')->nullable();
            $table->string('name')->nullable();
            $table->dateTime('dob')->nullable();
            $table->string('gender')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->bigInteger('CMND')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('worker');
    }
}
