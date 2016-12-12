<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('creator_id')->unsigned();
            $table->integer('item_id')->unsigned();
            $table->timestamp('meeting_datetime');
            $table->boolean('reserved')->default(false);
            $table->timestamp('deleted_at');
            $table->timestamps();

            $table->foreign('creator_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('no action');
            $table->foreign('item_id')->references('id')->on('items')->onUpdate('cascade')->onDelete('no action');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('meetings');
    }
}
