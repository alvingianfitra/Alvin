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
        /**Membuat Table royalties */
        Schema::create('royalties', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nama_id')->unsigned();
            $table->string('agregator', 100);
            $table->string('bulan');
            $table->date('tanggal');
            $table->integer('revanue');
            $table->timestamps();
        });
    
        /**Untuk merelasikan table royalties dengan table artikel */
        Schema::table('royalties', function (Blueprint $table) {
    
            $table->foreign('nama_id')->references('id')->on('artikels')->onUpdate('cascade')->onDelete('cascade');
        });
    }
    
    /**
     * Reverse the migrations.
     */
        public function down(): void
    {
        Schema::dropIfExists('royalties');
    }
};