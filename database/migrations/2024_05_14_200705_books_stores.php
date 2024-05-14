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
        Schema::create('book_store', function (Blueprint $table) {
            $table->uuid('book_uuid');
            $table->uuid('store_uuid');
            $table->foreign('book_uuid')->references('uuid')->on('books');
            $table->foreign('store_uuid')->references('uuid')->on('stores');
            $table->primary(['book_uuid', 'store_uuid']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books_stores');
    }
};
