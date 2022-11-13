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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('FCs');
            $table->string('passport');
            $table->integer('experience');
            $table->string('phone');
            $table->integer('trips');
            $table->foreignId("status_id")->constrained("status_drivers")->onDelete("cascade");
            $table->foreignId("car_id")->constrained("cars")->onDelete("cascade");
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
        Schema::dropIfExists('drivers');
    }
};
