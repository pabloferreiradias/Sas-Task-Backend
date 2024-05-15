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
            $table->uuid('book_id');
            $table->uuid('store_id');
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('store_id')->references('id')->on('stores');
            $table->primary(['book_id', 'store_id']);
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
