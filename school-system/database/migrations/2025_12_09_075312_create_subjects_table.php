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
            $table->string('subject_name', 20)->unique();
            $table->string('subject_index', 10)->unique();
            $table->decimal('subject_order', 5,2);
            $table->string('subject_color', 10);
            $table->integer('subject_number');
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
        Schema::dropIfExists('subjects');
    }
};
