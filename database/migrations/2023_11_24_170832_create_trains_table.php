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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('reference', 80);
            $table->string('slug', 80)->unique();
            $table->string('Azienda', 100);
            $table->string('Stazione_di_Partenza', 100);
            $table->string('Stazione_di_arrivo', 80);
            $table->time('Orario_di_partenza', 100);
            $table->time('Orario_di_arrivo', 100);
            $table->string('Codice_treno');
            $table->string('carrozze',100);
            $table->string('In_orario', 100);
            $table->string('Cancellato', 100)->nullable();
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
        Schema::dropIfExists('trains');
    }
};
