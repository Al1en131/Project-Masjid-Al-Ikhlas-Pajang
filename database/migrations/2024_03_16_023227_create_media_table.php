<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $path = storage_path('app/public/media');
        File::deleteDirectory($path);

        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable()->unique();
            $table->string('collection_name');
            $table->string('name');
            $table->string('file_name');
            $table->string('mime_type')->nullable();
            $table->string('disk');
            $table->string('conversions_disk')->nullable();
            $table->unsignedBigInteger('size');
            $table->json('manipulations');
            $table->json('custom_properties');
            $table->json('generated_conversions');
            $table->json('responsive_images');
            $table->unsignedBigInteger('model_id'); // Tambahkan kolom ini
            $table->string('model_type'); // Tambahkan kolom ini
            $table->unsignedInteger('order_column')->nullable()->index();
            $table->nullableTimestamps();
        
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
