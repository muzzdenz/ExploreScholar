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
        Schema::table('scholarships', function (Blueprint $table) {
            // Tambahkan kolom 'official_website_url' sebagai string, boleh kosong
            $table->string('official_website_url')->nullable()->after('description'); // Contoh: setelah description
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('scholarships', function (Blueprint $table) {
            // Hapus kolom 'official_website_url' jika migration di-rollback
            $table->dropColumn('official_website_url');
        });
    }
};