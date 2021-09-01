<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->timestamps();
            $table->string('role');
            $table->float('wallet');
            $table->string('vat_number')->nullable();
            $table->string('recharge')->nullable();
            $table->string('sim')->nullable();
            $table->string('cargo')->nullable();
            $table->string('mobile')->nullable();
            $table->boolean('recharge_permission')->default(0);
            $table->boolean('sim_permission')->default(0);
            $table->boolean('cargo_permission')->default(0);
            $table->boolean('mobile_permission')->default(0);
            $table->float('due')->nullable();;
            $table->boolean('completed')->default(0);
            $table->string('address')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('codice_fiscale')->nullable();
            $table->boolean('reseller_permission')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
