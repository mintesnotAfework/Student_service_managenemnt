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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("parent_id")->nullable();
            $table->bigInteger("field_id");
            $table->bigInteger("dorm_id");
            $table->bigInteger("user_id");
            $table->foreign("user_id")
                ->references("id")
                ->on("users")
                ->onDelete("cascade");
            $table->foreign("field_id")
                ->references("id")
                ->on("fields")
                ->onDelete("cascade");
            $table->foreign("dorm_id")
                ->references("id")
                ->on("dorms")
                ->onDelete("cascade");
            $table->foreign("parent_id")
                ->references("id")
                ->on("parent__parents")
                ->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
