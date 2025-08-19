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
        Schema::table('tickets', function (Blueprint $table) {
            // Hanya tambahkan kolom yang belum ada
            $table->timestamp('checkout_at')->nullable();
            $table->string('kode_unik')->nullable()->unique();
            $table->integer('stok')->default(0);
            $table->integer('stok_awal')->default(0);
            $table->string('kategori')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->dropColumn([
                'checkout_at',
                'kode_unik',
                'stok',
                'stok_awal',
                'kategori'
            ]);
        });
    }
};
