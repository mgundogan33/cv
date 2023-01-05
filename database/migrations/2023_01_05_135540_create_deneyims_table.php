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
        Schema::create('deneyims', function (Blueprint $table) {
            $table->id();
            $table->text('firma_adi');
            $table->text('firma_sektoru');
            $table->text('proje_adi');
            $table->text('proje_yil');
            $table->text('proje_yetkisi');
            $table->text('proje_tanimi');
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
        Schema::dropIfExists('deneyims');
    }
};
