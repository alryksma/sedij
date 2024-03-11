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
        Schema::create('books', function (Blueprint $table) {
            $table->id('NSBN');
            $table->string('judul');
            $table->string('slug');
            $table->string('penulis');
            $table->text('deskripsis');
            $table->text('deskripsip');
            $table->year('tahun_rilis');
            $table->string('image')->nullable();
            $table->foreignId('category_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
