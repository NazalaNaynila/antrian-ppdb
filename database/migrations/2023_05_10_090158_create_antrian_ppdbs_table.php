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
        Schema::create('antrian_ppdbs', function (Blueprint $table) {
            $table->id();
            $table->string('NISN');
            $table->string('Nama');
            $table->string('Jalur_Pendaftaran');
            $table->string('No_Telefon');
            $table->string('Nomor_Antrian');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antrian_ppdbs');
    }
};
