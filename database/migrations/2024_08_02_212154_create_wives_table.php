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
        Schema::create('wives', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resident_id')->constrained('residents')->cascadeOnDelete();
            $table->string('name_wife');
            $table->enum('gender_wife', ['Laki-Laki', 'Perempuan']);
            $table->string('birth_wife');
            $table->enum('religion_wife', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu', 'Lainnya']);
            $table->enum('blood_wife', ['A', 'B', 'AB', 'O']);
            $table->string('phone_wife');
            $table->string('job_wife');
            $table->enum('last_education_wife', ['Tidak Sekolah','SD', 'SMP', 'SMA', 'Diploma', 'Sarjana', 'Magister', 'Doktor']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wives');
    }
};
