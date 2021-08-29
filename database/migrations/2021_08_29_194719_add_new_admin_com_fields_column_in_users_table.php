<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewAdminComFieldsColumnInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->float('admin_recharge_commission')->default(0);
            $table->float('admin_international_recharge_commission')->default(0);
            $table->float('admin_mobile_commission')->default(0);
            $table->float('admin_cargo_commission')->default(0);
            $table->float('admin_sim_commission')->default(0);
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
