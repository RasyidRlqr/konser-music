<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('tickets', function (Blueprint $table) {
        // Hapus atau komentari baris berikut jika kolom sudah ada
        // $table->unsignedBigInteger('user_id')->nullable();
        
        // Tambahkan hanya kolom yang belum ada
        if (!Schema::hasColumn('tickets', 'is_paid')) {
            $table->boolean('is_paid')->default(false);
        }
        if (!Schema::hasColumn('tickets', 'qr_token')) {
            $table->string('qr_token')->nullable();
        }
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tickets', function (Blueprint $table) {
            //
        });
    }
};
