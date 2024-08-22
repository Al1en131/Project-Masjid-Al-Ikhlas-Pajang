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
        Schema::create('childrens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resident_id')->constrained('residents')->cascadeOnDelete();
            $table->string('name_child');
            $table->enum('gender_child', ['Laki-Laki', 'Perempuan']);
            $table->string('birth_child');
            $table->enum('status_child', ['Menikah', 'Belum Menikah']);
            $table->enum('religion_child', ['Islam', 'Kristen','Katolik','Hindu', 'Buddha', 'Konghucu', 'Lainnya'  ]);
            $table->enum('blood_child', ['A', 'B', 'AB', 'O']);
            $table->string('phone_child');
            $table->string('job_child');
            $table->enum('last_education_child', ['Tidak Sekolah','SD', 'SMP', 'SMA', 'Diploma', 'Sarjana', 'Magister', 'Doktor']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('childrens');
    }
};
