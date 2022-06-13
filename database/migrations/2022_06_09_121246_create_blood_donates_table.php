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
        Schema::create('blood_donates', function (Blueprint $table) {
            $table->id();
            $table->string('doonerName')->nullable();
            $table->string('BloodType');
            $table->string('contact')->nullable();
            $table->string('healthStatus')->nullable();
            $table->string('presentAddrress')->nullable();
            $table->string('permanentAddress')->nullable();
            $table->text('image')->nullable();
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
        Schema::dropIfExists('blood_donates');
    }
};
