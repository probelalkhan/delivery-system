<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('address_pickup')->nullable();
            $table->unsignedBigInteger('address_delivery')->nullable();
            $table->string('title')->nullable();
            $table->string('nature_container')->nullable();
            $table->string('packaging')->nullable();
            $table->double('weight')->nullable();
            $table->double('length')->nullable();
            $table->double('width')->nullable();
            $table->double('height')->nullable();
            $table->date('pickup')->nullable();
            $table->date('delivery')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();

            $table->foreign('address_pickup')->references('id')->on('addresses')->onDelete('cascade');
            $table->foreign('address_delivery')->references('id')->on('addresses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
