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
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->string('grade_name', 5)->unique();
            $table->string('grade_group');
            $table->string('grade_color', 10);
            $table->decimal('grade_order',5,2);
            $table->timestamps();
            $table->softDeletesTz('deleted_at');
            // $table->string('updated_by', 20);
            // $table->string('created_by', 20);
            // $table->string('deleted_by', 20);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};
