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
        Schema::create('anggota_departement_putris', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('departement_putri_id')->constrained()->onDelete('cascade');
            $table->string('nim');
            $table->string('nama');
            $table->string('urutan');
            $table->string('prodi');
            $table->string('asal')->nullable();
            $table->string('image')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_departement_putris');
    }
};
