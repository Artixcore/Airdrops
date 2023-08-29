<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_dealers', function (Blueprint $table) {
            $table->id();
            $table->string('dealer_number');
            $table->string('dealer_name');
            $table->string('licence_number');
            $table->string('dealer_details');
            $table->string('dealer_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_dealers');
    }
};
