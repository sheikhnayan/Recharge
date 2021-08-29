<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('vat_number')->nullable();
            $table->string('recharge')->default(0);
            $table->string('sim')->default(0);
            $table->string('cargo')->default(0);
            $table->string('mobile')->default(0);
            $table->boolean('recharge_permission')->default(0);
            $table->boolean('sim_permission')->default(0);
            $table->boolean('cargo_permission')->default(0);
            $table->boolean('mobile_permission')->default(0);
            $table->float('due')->nullable();;
            $table->boolean('completed')->default(0);
            $table->string('address')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('codice_fiscale')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
