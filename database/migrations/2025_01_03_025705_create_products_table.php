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
            $table->string('products_id')->primary();
            //Kolom yang menghubungkan ke tabel Suppliers
            $table->string('supplier_id');
            $table->foreign('supplier_id')->references('supplier_id')->on('suppliers')->onDelete('cascade');

            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('type', ['goods', 'services']); // Barang atau jasa
            $table->decimal('price', 10, 2)->nullable(); // Harga (opsional)
            $table->string('unit_of_measure')->nullable();
            $table->decimal('rate', 10, 2)->nullable(); // Tarif per unit (khusus untuk jasa)
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
