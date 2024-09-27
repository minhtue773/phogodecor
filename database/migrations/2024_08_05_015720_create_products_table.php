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
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('price');
            $table->integer('discount_price')->nullable();
            $table->integer('stock')->default(0);
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0: none, 1: hot, 2: bán chạy');
            $table->boolean('is_hidden')->default(0);
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
            $table->softDeletes('deleted_at');
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
