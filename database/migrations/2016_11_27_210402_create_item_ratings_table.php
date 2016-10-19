<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_ratings', function (Blueprint $table) {
            $table->integer('item_id')->unsigned();
            $table->integer('evaluator_id')->unsigned();
            $table->integer('rating')->unsigned();

            $table->foreign('item_id')->references('id')->on('items')->onUpdate('cascade')->onDelete('no action');
            $table->foreign('evaluator_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('item_ratings');
    }
}
