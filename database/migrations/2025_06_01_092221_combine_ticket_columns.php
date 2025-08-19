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
        if (!Schema::hasColumn('tickets', 'user_id')) {
            $table->unsignedBigInteger('user_id')->nullable();
        }
        if (!Schema::hasColumn('tickets', 'is_paid')) {
            $table->boolean('is_paid')->default(false);
        }
        if (!Schema::hasColumn('tickets', 'qr_token')) {
            $table->string('qr_token')->nullable();
        }
        if (!Schema::hasColumn('tickets', 'buyer_name')) {
            $table->string('buyer_name')->nullable();
        }
        if (!Schema::hasColumn('tickets', 'buyer_email')) {
            $table->string('buyer_email')->nullable();
        }
        if (!Schema::hasColumn('tickets', 'buyer_phone')) {
            $table->string('buyer_phone')->nullable();
        }
        if (!Schema::hasColumn('tickets', 'buyer_ktp')) {
            $table->string('buyer_ktp')->nullable();
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
