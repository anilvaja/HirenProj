<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('order_type');
            $table->unsignedInteger('company');
            $table->string('work_order_no')->nullable();
            $table->integer('weight')->nullable();
            $table->string('kva')->nullable();
            $table->date('expected_delivery_date')->nullable();
            $table->date('po_date')->nullable();
            $table->integer('po_no')->nullable();
            $table->integer('rate')->nullable();
            $table->unsignedInteger('channel');
            $table->unsignedInteger('status');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('order_type')->references('id')->on('order_types')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('company')->references('id')->on('companies')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('channel')->references('id')->on('channels')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('status')->references('id')->on('order_statuses')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
