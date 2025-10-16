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
		Schema::table('books', function (Blueprint $table) {
        $table->foreignId('book_category_id')->nullable()->constrained()->onDelete('set null');
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
		Schema::table('books', function (Blueprint $table) {
        $table->dropForeign(['book_category_id']);
        $table->dropColumn('book_category_id');
    });

    }
};
