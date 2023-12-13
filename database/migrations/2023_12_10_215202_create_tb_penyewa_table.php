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
        Schema::create('tb_penyewa', function (Blueprint $table) {
            $table->increments('sewa_id');
            $table->string('sewa_nama');
            $table->string('sewa_nohp');
            $table->text('sewa_alamat');
            $table->date('sewa_waktu');
            $table->tinyInteger('sewa_status');
            $table->Integer('sewa_id_cat');
            $table->bigInteger('sewa_id_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_penyewa');
    }
};
