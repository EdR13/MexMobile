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
            $table->integer('battery');
            $table->boolean('fiveg_capable');
            $table->year('release_year');
            $table->integer('price');
            $table->foreignId('manufacturer_id')->references('id')->on('manufacturers');
            $table->foreignId('color_id')->references('id')->on('colors');
            $table->foreignId('os_id')->references('id')->on('operative_systems');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
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
