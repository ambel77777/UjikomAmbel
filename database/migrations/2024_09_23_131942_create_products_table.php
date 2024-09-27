<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
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
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};