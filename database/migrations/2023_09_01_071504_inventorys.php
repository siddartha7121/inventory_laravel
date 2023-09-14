<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('inventorys', function (Blueprint $table) {
            $table->increments('deviceId');
            $table->string('deviceName', 255)->nullable();
            $table->date('date')->default(now());
            $table->bigInteger('assignedTo')->unsigned()->nullable();
            $table->string('remark', 20)->nullable();
            $table->date('assignedDate')->nullable();
            $table->string('image')->nullable();
            $table->integer('penalty')->nullable();
            $table->primary('deviceId');
            $table->foreign('assignedTo')->references('id')->on('users');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('inventorys');
    }
};
