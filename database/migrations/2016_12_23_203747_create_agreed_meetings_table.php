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
            $table->integer('creator_user_id')->unsigned();
            $table->integer('caller_user_id')->unsigned();
            $table->boolean('accepted_by_creator')->default(false);
            $table->timestamp('deleted_at');
            $table->timestamps();

            $table->foreign('meeting_id')->references('id')->on('meetings')->onUpdate('cascade')->onDelete('no action');
            $table->foreign('creator_user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('no action');
            $table->foreign('caller_user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('no action');

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
