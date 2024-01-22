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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->text('namaPasien');
            $table->text('tanggalLahir');
            $table->text('jenisKelamin');
            $table->text('alamatPasien');
            $table->text('kotaPasien');
            $table->text('usiaPasien');
            $table->text('penyakitPasien');
            $table->text('idDokter');
            $table->text('tanggalMasuk');
            $table->text('tanggalKeluar');
            $table->text('nomorKamar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
