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
        Schema::create('get_medicines', function (Blueprint $table) {
            $table->id(); 
            $table->string('receiverName');
            $table->string('reason');
            $table->string('medicineName')->nullable();
            $table->string('medecineQuantity')->nullable();
            $table->string('cost')->nullable();
            $table->string('quantity')->nullable();
            $table->string('receiverAddress')->nullable();
            $table->text('image');
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
        Schema::dropIfExists('get_medicines');
    }
};
