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
            $table->string('product_name');
            $table->string('description_name')->nullable();
            $table->string('sku');
            $table->unsignedBigInteger('vendor_id')->nullable();
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->unsignedBigInteger('product_group_id')->nullable();
            $table->foreign('vendor_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('shop_id')->references('id')->on('vendor_shops')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_group_id')->references('id')->on('product_groups')->onDelete('cascade')->onUpdate('cascade');
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
