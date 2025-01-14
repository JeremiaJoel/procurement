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
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->string('po_id')->primary();
            //Kolom untuk menghubungkan ke tabel rfqs
            $table->string('rfq_id');
            $table->foreign('rfq_id')->references('rfq_id')->on('rfqs')->onDelete('cascade');

            //Kolom untuk menghubungkan ke tabel buyers
            $table->string('buyer_id');
            $table->foreign('buyer_id')->references('buyer_id')->on('buyers')->onDelete('cascade');

            //Kolom untuk menghubungkan ke tabel suppliers
            $table->string('supplier_id');
            $table->enum('status', ['ordered', 'delivered', 'cancelled']);
            $table->decimal('total_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_orders');
    }
};
