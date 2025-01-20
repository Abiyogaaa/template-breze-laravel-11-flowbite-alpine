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
        Schema::create('kopi', function (Blueprint $table) {
            $table->id(); // Primary key, auto-increment
            $table->string('nama', 255); // Nama kopi
            $table->text('deskripsi')->nullable(); // Deskripsi kopi
            $table->decimal('harga', 10, 2); // Harga kopi
            $table->string('gambar')->nullable(); // Path gambar produk
            $table->enum('kategori', ['arabica', 'robusta', 'liberica', 'excelsa'])->default('arabica'); // Kategori kopi
            $table->integer('stok')->default(0); // Stok kopi
            $table->boolean('is_available')->default(true); // Apakah tersedia
            $table->unsignedBigInteger('created_by')->nullable(); // ID user pembuat
            $table->unsignedBigInteger('updated_by')->nullable(); // ID user pengedit terakhir
            $table->timestamps(); // Kolom created_at dan updated_at
            $table->softDeletes(); // Kolom deleted_at untuk soft delete

            // Foreign keys
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kopi');
    }
};
