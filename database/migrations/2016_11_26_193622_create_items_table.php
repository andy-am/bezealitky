<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active');
            $table->integer('attachment_id')->unsigned();
            $table->string('title');
            $table->string('description');
            $table->string('longitude');
            $table->string('latitude');
            $table->integer('floor');
            $table->boolean('elevator');
            $table->boolean('air_conditioner');
            $table->boolean('disabled_access');
            $table->boolean('cellar');
            $table->boolean('approved');
            $table->timestamp('deleted_at');
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
        Schema::drop('items');
    }
}
