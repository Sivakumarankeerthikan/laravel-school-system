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
            $table->string('file_name', 100);
            $table->string('original_name', 50);
            $table->string('mime', 50);
            $table->integer('size');
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
        Schema::dropIfExists('profiles');
    }
};
