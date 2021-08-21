<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
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
            $table->string('first_name')->nullable();
            $table->string('rfirst_name')->nullable();
            $table->string('surname')->nullable();
            $table->string('rsurname')->nullable();
            $table->date('dob')->nullable();
            $table->date('rdob')->nullable();
            $table->string('document_number')->nullable();
            $table->string('rdocument_number')->nullable();
            $table->string('phone')->nullable();
            $table->string('rphone')->nullable();
            $table->string('email')->nullable();
            $table->string('remail')->nullable();
            $table->longText('address')->nullable();
            $table->longText('raddress')->nullable();
            $table->string('cap')->nullable();
            $table->string('rcap')->nullable();
            $table->string('country')->nullable();
            $table->string('rcountry')->nullable();
            $table->string('state')->nullable();
            $table->string('rstate')->nullable();
            $table->string('dist')->nullable();
            $table->string('rdist')->nullable();
            $table->string('city')->nullable();
            $table->string('rcity')->nullable();
            $table->date('expected_date_to_receive')->nullable();
            $table->string('delivery_condition')->nullable();
            $table->integer('numberOfBox')->nullable();
            $table->decimal('goods_value')->nullable();
            $table->string('productType')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('perKg')->nullable();
            $table->decimal('cusCharge')->nullable();
            $table->decimal('homeDeliveryCharge')->nullable();
            $table->decimal('addiCharge')->nullable();
            $table->decimal('total')->nullable();
            $table->decimal('agent_comm')->nullable();
            $table->string('delivery_way')->nullable();
            $table->string('departure_airport')->nullable();
            $table->string('arrival_airport')->nullable();
            $table->string('product1')->nullable();
            $table->string('product2')->nullable();
            $table->string('product3')->nullable();
            $table->string('product4')->nullable();
            $table->string('product5')->nullable();
            $table->string('quantity1')->nullable();
            $table->string('quantity2')->nullable();
            $table->string('quantity3')->nullable();
            $table->string('quantity4')->nullable();
            $table->string('quantity5')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
