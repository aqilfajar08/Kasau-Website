<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('news', function (Blueprint $table) {
            // Tambahkan kolom dulu
            $table->foreignId('news_url_id')
                  ->nullable()
                  ->constrained('news_urls')
                  ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropForeign(['news_url_id']);
            $table->dropColumn('news_url_id');
        });
    }
};
