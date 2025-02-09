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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('credit');
            $table->unsignedBigInteger('dept_id');
            $table->unsignedBigInteger('session_id'); // Added session column
            $table->foreign('dept_id')->references('id')->on('departments');
            $table->foreign('session_id')->references('id')->on('academic_sessions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
