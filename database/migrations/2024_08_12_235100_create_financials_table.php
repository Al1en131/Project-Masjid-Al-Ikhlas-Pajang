<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialsTable extends Migration
{
    public function up()
    {
        Schema::create('financials', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('image'); // Menyimpan path dari file gambar
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('financials');
    }
}
