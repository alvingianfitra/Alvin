<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use SebastianBergmann\Type\VoidType;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

public function up(): Void
{
    /**Membuat Table royalties */
    Schema::create('royalties', function (Blueprint $table) {
        $table->id();
        $table->bigInteger('nama_id')->unsigned();
        $table->string('agregator', 100);
        $table->string('bulan');
        $table->date('tanggal');
        $table->integer('revanue');
        $table->timestamp();
    });

    /**Untuk merelasikan table royalties dengan table artikel */
    Schema::table('royalties', function (Blueprint $table) {

        $table->foreign('nama_id')->references('id')->on('artikels')->onUpdate('cascade')->onDelete('cascade');
    });
}

/**
 * Reverse the migrations.
 */
public function down(): Void
{
    Schema::dropIfExists('royalties');
}
};