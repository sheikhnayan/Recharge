<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD:database/migrations/2021_08_29_190153_add_wholesale_to_phones.php
class AddWholesaleToPhones extends Migration
=======
class AddNewAdminComFieldsColumnInUsersTable extends Migration
>>>>>>> 1b37c64a9183f5a5a5f4e5d442010eb937bb6efc:database/migrations/2021_08_29_194719_add_new_admin_com_fields_column_in_users_table.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2021_08_29_190153_add_wholesale_to_phones.php
        Schema::table('phones', function (Blueprint $table) {
            $table->boolean('wholsesale')->default(0);
=======
        Schema::table('users', function (Blueprint $table) {
            $table->float('admin_recharge_commission')->default(0);
            $table->float('admin_international_recharge_commission')->default(0);
            $table->float('admin_mobile_commission')->default(0);
            $table->float('admin_cargo_commission')->default(0);
            $table->float('admin_sim_commission')->default(0);
>>>>>>> 1b37c64a9183f5a5a5f4e5d442010eb937bb6efc:database/migrations/2021_08_29_194719_add_new_admin_com_fields_column_in_users_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('phones', function (Blueprint $table) {
            //
        });
    }
}
