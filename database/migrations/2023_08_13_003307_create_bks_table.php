<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bks', function (Blueprint $table) {
            $table->id();
            $table->date('bk_tanggal');
            $table->string('bk_kode')->unique();
            $table->string('barang_kode');
            $table->string('pembeli_id');
            $table->string('bk_jumlah')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bks');
    }
};
