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
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->string('nik')->unique();
            $table->string('name');
            $table->enum('gender', ['Laki-Laki', 'Perempuan']);
            $table->string('birth');
            $table->enum('status', ['Menikah', 'Belum Menikah']);
            $table->enum('religion', ['Islam', 'Kristen','Katolik','Hindu', 'Buddha', 'Konghucu', 'lainnya'  ]);
            $table->enum('blood', ['A', 'B', 'AB', 'O']);
            $table->string('phone');
            $table->string('job');
            $table->enum('last_education', ['SD', 'SMP', 'SMA', 'Diploma', 'S1', 'S2', 'S3']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residents');
    }
};
