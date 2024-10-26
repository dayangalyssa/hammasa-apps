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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('order_code')->unique();
            $table->string('no_telp');
            $table->string('email');
            $table->text('alamat');
            $table->integer('kuantitas');
            $table->text('catatan');
            $table->string('tipe_baju');
            $table->timestamps();
            $table->string('status')->default('Konfirmasi pesanan');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
