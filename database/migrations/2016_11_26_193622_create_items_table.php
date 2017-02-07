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
            $table->integer('creator_id')->unsigned();
            $table->integer('item_kind_id')->unsigned(); // Dom, byt, priestor, objekt, rekreačný dom, pozemok.
            $table->integer('item_type_id')->unsigned(); //
            $table->integer('window_type_id')->unsigned(); // plastové, francúzske, drevenné, euro
            $table->integer('item_offer_id')->unsigned(); // predaj, kupa, prenajom etc...
            $table->integer('thing_id')->unsigned(); // rozostavané, úplná rekonštrukcia, čiatočná rekonštrukcia, pôvodný stav
            $table->integer('construction_type_id')->unsigned(); // tehla, panel, etc.
            $table->integer('heating_type_id')->unsigned(); // podlahové, elektrické, plynové etc
            $table->timestamp('availability_from')->nullable();
            $table->float('price')->nullable();
            $table->float('price_for_m2')->nullable();
            $table->boolean('m2')->default(FALSE);
            $table->float('deposit')->nullable();
            $table->float('commission')->nullable();
            $table->integer('room')->nullable();
            $table->string('country');
            $table->string('county');
            $table->string('district');
            $table->string('street');
            $table->string('street_number');
            $table->string('zip');
            $table->string('city');
            $table->integer('usable_area')->nullable();
            $table->integer('built_up_area')->nullable();
            $table->integer('land_area')->nullable();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->integer('floor')->nullable();
            $table->boolean('for_m2')->default(FALSE);
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
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('creator_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('no action');
            $table->foreign('item_offer_id')->references('id')->on('item_offers')->onUpdate('cascade')->onDelete('no action');
            $table->foreign('item_kind_id')->references('id')->on('item_kinds')->onUpdate('cascade')->onDelete('no action');
            $table->foreign('item_type_id')->references('id')->on('item_types')->onUpdate('cascade')->onDelete('no action');
            $table->foreign('window_type_id')->references('id')->on('window_types')->onUpdate('cascade')->onDelete('no action');
            $table->foreign('thing_id')->references('id')->on('things')->onUpdate('cascade')->onDelete('no action');
            $table->foreign('construction_type_id')->references('id')->on('construction_types')->onUpdate('cascade')->onDelete('no action');
            $table->foreign('heating_type_id')->references('id')->on('heating_types')->onUpdate('cascade')->onDelete('no action');

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
