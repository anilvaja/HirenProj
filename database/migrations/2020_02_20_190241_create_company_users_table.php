<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_users', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->nullable();
            $table->unsignedInteger('company');
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->unsignedInteger('user_type');
            $table->unsignedBigInteger('user_id');
            $table->enum('status',[0,1,2])->default('1');
            $table->foreign('user_type')->references('id')->on('user_types')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('company')->references('id')->on('companies')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('company_users');
    }
}
