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
        Schema::create('bukutamus', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal')->default(now())->nullable();              
            $table->string('nama');              
            $table->string('instansi_lembaga')->nullable();   
            $table->string('tujuan');
            $table->string('penerima');                        
            $table->bigInteger('no_telpon');
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
        Schema::dropIfExists('bukutamus');
    }
};
