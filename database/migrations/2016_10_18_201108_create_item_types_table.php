<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_types', function (Blueprint $table) { // byt dom
            $table->increments('id');
            $table->integer('item_kind_id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->boolean('active')->default(TRUE);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('item_kind_id')->references('id')->on('item_kinds')->onUpdate('cascade')->onDelete('no action');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('item_types');
    }
}
