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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('p_number');
            $table->string('category');
            $table->string('sub_category');
            $table->string('name');
            $table->string('image');
            $table->string('details');
            $table->string('quantity');
            $table->string('com_price');
            $table->string('dealer_price');
            $table->string('price');
            $table->string('size');
            $table->string('discount');
            $table->string('brand');
            $table->string('dealer');
            $table->string('production_fate');
            $table->string('expire_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
