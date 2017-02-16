<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zips', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number');
            $table->unsignedInteger('city_id');
            $table->boolean('active')->default(TRUE);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('city_id')->references('id')->on('cities')->onUpdate('cascade')->onDelete('no action');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('zips');
    }
}
