<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('tickets', function (Blueprint $table) {
            // Tambahkan kolom stock jika belum ada
            if (!Schema::hasColumn('tickets', 'stock')) {
                $table->integer('stock')->default(0)->after('harga');
            }
        });
    }

    public function down()
    {
        Schema::table('tickets', function (Blueprint $table) {
            // Hapus kolom jika rollback
            $table->dropColumn('stock');
        });
    }
};