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
        Schema::create('blood_gets', function (Blueprint $table) {
            $table->id();
            $table->string('patiernName')->nullable();
            $table->string('BloodType');
            $table->string('contact')->nullable();
            $table->string('healthProblems')->nullable();
            $table->string('hospitalAddrress')->nullable();
            $table->string('typeOfNecessity')->nullable();
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
        Schema::dropIfExists('blood_gets');
    }
};
