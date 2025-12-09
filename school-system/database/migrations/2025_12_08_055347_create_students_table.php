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
            $table->integer('image_id');
            $table->string('father_name',45);
            $table->string('student_name',45);
            $table->string('admission_no',5)->unique();
            $table->integer('grade');
            $table->string('nic_no', 15)->unique();
            $table->date('date_of_birth');
            $table->enum('gender', ['male', 'female', 'others']);
            $table->string('telephone_no', 15);
            $table->string('address', 250);
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
        Schema::dropIfExists('students');
    }
};
