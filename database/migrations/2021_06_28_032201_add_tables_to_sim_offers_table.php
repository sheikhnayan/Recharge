<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTablesToSimOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->string('costo')->nullable();
            $table->string('ricarica')->nullable();
            $table->string('valida')->nullable();
            $table->string('internet')->nullable();
            $table->string('minuti')->nullable();
            $table->string('minuti_internazionale')->nullable();
            $table->string('minuti_illimitati')->nullable();
            $table->Longtext('minuti_internazionali_validi')->nullable();
            $table->Longtext('altre_informazioni')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sim_offers', function (Blueprint $table) {
            //
        });
    }
}
