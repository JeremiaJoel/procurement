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
        Schema::create('rfq_items', function (Blueprint $table) {
            $table->string('rfq_item_id')->primary();

            //Kolom untuk menghubungkan ke tabel rfqs
            $table->string('rfq_id');
            $table->foreign('rfq_id')->references('rfq_id')->on('rfqs')->onDelete('cascade');

            //Kolom untuk menghubungkan ke tabel products
            $table->string('product_id');
            $table->foreign('product_id')->references('products_id')->on('products')->onDelete('cascade');

            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rfq_items');
    }
};
