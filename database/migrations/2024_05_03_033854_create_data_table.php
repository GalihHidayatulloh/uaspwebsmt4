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
        Schema::create('disdukcapil', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('namalengkap');
            $table->string('alamat');
            $table->string('nomorhp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disdukcapil');
    }
};
