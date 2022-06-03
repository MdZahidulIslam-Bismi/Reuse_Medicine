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
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained();
            $table->string('medicineName');
            $table->string('medicineType');
            $table->string('BrandName')->nullable();
            $table->string('BatchId')->nullable();
            $table->string('prducTionExpire')->nullable();
            $table->string('donerAddress')->nullable();
            $table->integer('quantity');
            $table->text('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migratiogu4r4yt58y55ns.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
};
