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
            $table->increments('creator_id');
            $table->integer('item_kind_id')->unsigned(); // Dom, byt, priestor, objekt, rekreačný dom, pozemok.
            $table->integer('item_type_id')->unsigned(); //
            $table->integer('window_type_id')->unsigned(); // plastové, francúzske, drevenné, euro
            $table->integer('offer_type_id')->unsigned(); // predaj, kupa, prenajom etc...
            $table->integer('condition_id')->unsigned(); // rozostavané, úplná rekonštrukcia, čiatočná rekonštrukcia, pôvodný stav
            $table->integer('construction_type_id')->unsigned(); // tehla, panel, etc.
            $table->integer('heating_type_id')->unsigned(); // podlahové, elektrické, plynové etc
            $table->timestamp('availability_from')->nullable();
            $table->float('price')->nullable();
            $table->float('deposit')->nullable();
            $table->float('commission')->nullable();
            $table->integer('room');
            $table->string('country');
            $table->string('district');
            $table->string('street');
            $table->string('street_number');
            $table->string('zip');
            $table->string('city');
            $table->integer('residential_area');
            $table->string('title');
            $table->text('description');
            $table->string('longitude');
            $table->string('latitude');
            $table->integer('floor')->nullable();
            $table->boolean('active')->default(TRUE);
            $table->boolean('reserve')->default(FALSE);
            $table->boolean('boiler')->default(FALSE);
            $table->boolean('garage')->default(FALSE);
            $table->boolean('pantry')->default(FALSE);
            $table->boolean('storage_room')->default(FALSE);
            $table->boolean('elevator')->default(FALSE);
            $table->boolean('air_conditioner')->default(FALSE);
            $table->boolean('disabled_access')->default(FALSE);
            $table->boolean('cellar')->default(FALSE);
            $table->boolean('approved')->default(FALSE);
            $table->timestamp('deleted_at');
            $table->timestamps();

            $table->foreign('creator_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('no action');
            $table->foreign('offer_type_id')->references('id')->on('offer_types')->onUpdate('cascade')->onDelete('no action');
            $table->foreign('item_type_id')->references('id')->on('item_types')->onUpdate('cascade')->onDelete('no action');
            $table->foreign('attachment_id')->references('id')->on('attachments')->onUpdate('cascade')->onDelete('no action');
            $table->foreign('window_type_id')->references('id')->on('window_types')->onUpdate('cascade')->onDelete('no action');
            $table->foreign('condition_id')->references('id')->on('conditions')->onUpdate('cascade')->onDelete('no action');
            $table->foreign('construction_type_id')->references('id')->on('construction_types')->onUpdate('cascade')->onDelete('no action');
            $table->foreign('heating_type_id')->references('id')->on('heating_types')->onUpdate('cascade')->onDelete('no action');
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
        Schema::drop('items');
    }
}
