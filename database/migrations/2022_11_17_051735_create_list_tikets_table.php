<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_tiket', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tiket');
            $table->string('desc_tiket');
            $table->string('gambar_tiket');
            $table->boolean('status_tiket')->default(1);
            $table->integer('harga_tiket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_tikets');
    }
};