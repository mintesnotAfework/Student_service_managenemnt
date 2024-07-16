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
        Schema::create('course__fields', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("course_id");
            $table->bigInteger("field_id");
            $table->foreign("course_id")
                ->references("id")
                ->on("courses")
                ->onDelete("cascade");
            $table->foreign("field_id")
                ->references("id")
                ->on("fields")
                ->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course__fields');
    }
};
