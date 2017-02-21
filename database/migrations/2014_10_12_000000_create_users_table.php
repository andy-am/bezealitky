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
            $table->enum("gender", ["Muž", "Žena"])->nullable();
            $table->string('pre_title')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('post_title')->nullable();
            $table->string('company_name')->nullable();
            $table->string('country')->nulllable(); // TODO
            $table->string('county')->nulllable(); // TODO
            $table->string('district')->nulllable(); // TODO
            $table->string('city')->nulllable(); // TODO
            $table->string('street')->nulllable(); // TODO
            $table->string('street_number')->nulllable(); // TODO
            $table->string('zip')->nulllable();  // TODO
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
