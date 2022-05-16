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
            $table->string('model', 45);
            $table->string('name', 45);
            $table->integer('storage');
            $table->integer('ram');
            $table->integer('batery');
            $table->boolean('5g_capable');
            $table->year('release_year');
            $table->integer('price');
            $table->foreignId('manufacter_id')->references('id')->on('manufacters');
            $table->foreignId('color_id')->references('id')->on('colors');
            $table->foreignId('os_id')->references('id')->on('operative_systems');
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
