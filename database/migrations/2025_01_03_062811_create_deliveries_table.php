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
        Schema::create('deliveries', function (Blueprint $table) {
            $table->string('delivery_id')->primary();
            //Kolom untuk menghubungkan ke tabel purchase_orders
            $table->string('product_id');
            $table->foreign('product_id')->references('products_id')->on('products')->onDelete('cascade');

            //Kolom untuk menghubungkan ke tabel suppliers
            $table->string('supplier_id');
            $table->foreign('supplier_id')->references('supplier_id')->on('suppliers')->onDelete('cascade');
            $table->date('delivery_date');
            $table->enum('status',['In transit','delivered']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deliveries');
    }
};
