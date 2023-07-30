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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profile_id');
            $table->enum('project_type',['On Going', 'Live', 'Complete']);
            $table->string('title');
            $table->text('description');
            $table->text('tool_technology');
            $table->text('project_link')->nullable();
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
        Schema::dropIfExists('projects');
    }
};
