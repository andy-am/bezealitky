<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgreedMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agreed_meetings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('meeting_id')->unsigned();
            $table->integer('from_user_id')->unsigned();
            $table->integer('to_user_id')->unsigned();
            $table->boolean('accepted_by_creator')->default(false);
            $table->timestamps();

            $table->foreign('meeting_id')->references('id')->on('meetings')->onUpdate('cascade')->onDelete('no action');
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
        Schema::drop('agreed_meetings');
    }
}
