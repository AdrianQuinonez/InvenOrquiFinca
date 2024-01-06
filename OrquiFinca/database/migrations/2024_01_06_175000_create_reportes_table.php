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
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('finca_id');
            $table->foreign('finca_id')->references('id')->on('fincas');
            $table->unsignedBigInteger('mes_id');
            $table->foreign('mes_id')->references('id')->on('meses');
            $table->string('higiene');
            $table->string('dyv');
            $table->string('vacunaA');
            $table->string('vacunaR');
            $table->string('vacunaC');
            $table->string('vacunaL');
            $table->string('anaplasma');
            $table->string('controlGyM');
            $table->string('controlM');
            $table->string('controlCyO');
            $table->bigInteger('vacasP');
            $table->bigInteger('vacasE');
            $table->bigInteger('terneros');
            $table->bigInteger('animalesE');
            $table->bigInteger('vendidos');
            $table->bigInteger('muertos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes');
    }
};
