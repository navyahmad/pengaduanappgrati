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
        Schema::create('datas', function (Blueprint $table) {
            $table->id();
            $table->string('no_agenda');
            $table->string('nopel');
            $table->string('nama_pl');
            $table->string('alamat');
            $table->string('tarif');
            $table->string('daya');
            $table->string('tlp', 20);
            $table->string('jns');
            $table->string('nm_petugas');
            $table->string('tgl');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datas');
    }
};
