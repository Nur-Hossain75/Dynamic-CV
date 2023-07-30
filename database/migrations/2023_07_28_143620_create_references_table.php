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
        Schema::create('references', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profile_id');
            $table->string('name');
            $table->string('designation');
            $table->string('email');
            $table->string('mobile');
            $table->string('institute');
            $table->string('relation');
            $table->integer('pritory');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('references');
    }
};
