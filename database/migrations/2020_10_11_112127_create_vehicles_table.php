<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->unsignedBigInteger('carrier_id')->nullable();
            $table->string('brand')->nullable();
            $table->string('reference')->nullable();
            $table->date('date_of_circulation')->nullable();
            $table->timestamps();
            $table->foreign('carrier_id')->references('id')->on('carriers')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
