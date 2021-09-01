<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD:database/migrations/2021_09_01_020218_add_reseller_column_to_users.php
class AddResellerColumnToUsers extends Migration
=======
class AddNewRechargeComFieldsColumnInUsersTable extends Migration
>>>>>>> 1b37c64a9183f5a5a5f4e5d442010eb937bb6efc:database/migrations/2021_08_29_194128_add_new_recharge_com_fields_column_in_users_table.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
<<<<<<< HEAD:database/migrations/2021_09_01_020218_add_reseller_column_to_users.php
            $table->boolean('reseller_permission')->default(0);
=======
            $table->float('international_recharge')->default(0);
>>>>>>> 1b37c64a9183f5a5a5f4e5d442010eb937bb6efc:database/migrations/2021_08_29_194128_add_new_recharge_com_fields_column_in_users_table.php
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
