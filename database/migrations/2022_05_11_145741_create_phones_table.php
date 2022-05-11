<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('manufacter');
            $table->foreign('manufacter')->references('id')->on('manufacters');
            $table->unsignedBigInteger('color');
            $table->foreign('color')->references('id')->on('colors');
            $table->unsignedBigInteger('os');
            $table->foreign('os')->references('id')->on('operative_systems');
            $table->string('model', 45);
            $table->string('name', 45);
            $table->integer('storage');
            $table->integer('ram');
            $table->integer('batery');
            $table->boolean('5g_capable');
            $table->year('release_year');
            $table->integer('precio');
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
        Schema::dropIfExists('phones');
    }
}
