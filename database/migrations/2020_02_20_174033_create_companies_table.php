<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title')->nullable();
            $table->text('details')->nullable();
            $table->text('address')->nullable();
            $table->string('email')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('alt_contact_no')->nullable();
            $table->string('company_code')->nullable();
            $table->string('gst_no')->nullable();
            $table->text('terms_and_condition')->nullable();
            $table->string('status');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('companies');
    }
}
