<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKindsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kinds', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('item_type_id');
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->timestamp('deleted_at');
            $table->timestamps();

            $table->foreign('item_type_id')->references('id')->on('item_types')->onUpdate('cascade')->onDelete('no action');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kinds');
    }
}
