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
    Schema::create('mhs_bioadata', function (Blueprint $table) {
        // Fixed type declaration and potential security fix
        $table->string('nim', 9) -> primary; 
        $table->string('nama_mhs');
        $table->string('prodi_mhs');
        $table->longText('alamat_mhs');
        $table->string('telepon_mhs');  
        $table->date('tanggal_lahir_mhs');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mhs_bioadata');
    }
};
