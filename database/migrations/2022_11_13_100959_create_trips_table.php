<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId("driver_id")->constrained("drivers")->onDelete("cascade");
            $table->foreignId("tarif_id")->constrained("tariffs")->onDelete("cascade");
            $table->string('mileage');
            $table->string('departure_date');
            $table->string('departure_time');
            $table->string('departure_point');
            $table->string('destination_point');
            $table->string('price');
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
        Schema::dropIfExists('trips');
    }
};
