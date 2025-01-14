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
        Schema::create('po_items', function (Blueprint $table) {
            $table->string('po_item_id')->primary();

            //kolom untuk menghubungkan ke tabel purchase_orders
            $table->string('po_id');
            $table->foreign('po_id')->references('po_id')->on('purchase_orders')->onDelete('cascade');

            //Kolom untuk menghubungkan ke tabel products
            $table->string('product_id');
            $table->foreign('product_id')->references('products_id')->on('products')->onDelete('cascade');
            
            $table->integer('quantity');
            $table->decimal('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('po_items');
    }
};
