<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_user')->default(TRUE);
            $table->string('pre_title')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('post_title')->nullable();
            $table->string('company_name')->nullable();
            $table->string('country'); // TODO
            $table->string('county'); // TODO
            $table->string('district'); // TODO
            $table->string('city'); // TODO
            $table->string('street'); // TODO
            $table->string('street_number'); // TODO
            $table->string('zip');  // TODO
            $table->text('note')->nullable();
            $table->text('about_me')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('password');
            $table->boolean('active')->default(FALSE);
            $table->softDeletes();
            $table->rememberToken();

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
        Schema::drop('users');
    }
}
