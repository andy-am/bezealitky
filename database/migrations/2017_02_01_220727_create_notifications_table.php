<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->enum('type',["sms", "email", "browser"]);
            $table->timestamp('sent_at')->nullable();
            $table->timestamp('actually_sent_at')->nullable();
            $table->enum("progress", ["pending", "in-queue", "sent"]);
            $table->boolean('is_read')->default(FALSE);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('no action');

        });
    }

    public function down()
    {
        Schema::drop('notifications');
    }

}
