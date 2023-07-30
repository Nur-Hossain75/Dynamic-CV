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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('nid');
            $table->tinyInteger('nid_status');
            $table->date('birth_date');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('nationality');
            $table->enum('gander',['Male','Female']);
            $table->text('present_address');
            $table->text('permanent_address');
            $table->longText('aspiration');
            $table->text('image');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
