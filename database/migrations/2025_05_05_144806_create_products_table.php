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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->json('media')->nullable(); // изображения, видео
            $table->string('category')->nullable(); // одежда, аксессуары
            $table->unsignedInteger('stock')->default(0);
            $table->string('status')->default('active'); // active, draft, hidden
            $table->json('options')->nullable(); // размеры, цвета и т.п.
            $table->timestamps();
        });           
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
