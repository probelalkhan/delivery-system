<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->date('dob')->nullable();
            $table->string('driving_licence')->nullable();
            $table->string('year_permit')->nullable();
            $table->integer('experience')->nullable();
            $table->integer('no_of_companies')->nullable();
            $table->string('vehicle_category')->nullable();
            $table->boolean('international')->nullable();
            $table->string('delivery_mode')->nullable();
            $table->string('enterprise_category')->nullable();
            $table->string('commodity_nature')->nullable();
            $table->string('avg_stay')->nullable();
            $table->string('professional_training')->nullable();
            $table->unsignedBigInteger('carrier_id')->nullable();;
            $table->timestamps();

            $table->foreign('carrier_id')->references('id')->on('carriers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
