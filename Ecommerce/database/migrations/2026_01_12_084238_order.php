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
        Schema::create('order', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('customer_id')->references('id')->on('customer')->onDelete('cascade');
            $table->unsignedBigInteger('product_id')->references('id')->on('product')->onDelete('cascade');
            $table->integer('quantity');
            $table->float('sub_total');
            $table->float('total_amount');
            $table->string('status');
            $table->string('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
