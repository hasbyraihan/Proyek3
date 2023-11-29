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
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->string('kodenota');
            $table->string('kodetenan');
            $table->string('kodekasir');
            $table->string('satuan');
            $table->bigInteger('jumlahbelanja');
            $table->bigInteger('diskon');
            $table->string('tanggal'); // Tambahkan kolom untuk tanggal
            $table->string('jam'); // Tambahkan kolom untuk jam
            $table->bigInteger('total'); 
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
