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
        Schema::create('materis', function (Blueprint $table) {
            $table->id('id')->primary();
            $table->foreignId('jurusan_id')->constrained('jurusans')->onDelete('cascade');
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(1);
            $table->string('buku_title',1000);
            $table->string('buku_pdf',);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materis');
    }
};