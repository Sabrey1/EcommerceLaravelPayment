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
        Schema::create('employee', function (Blueprint $table){
            $table->id();
            $table->string("name");
            $table->string("gender");
            $table->string("email")->unique();
            $table->string("phone_number")->nullable();
            $table->date("date_of_birth");
            $table->date("hire_date");
            $table->string("position");
            $table->string("salary")->nullable();
            $table->string("address")->nullable();
            $table->unsignedBigInteger('country_id')->references('id')->on('country')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
