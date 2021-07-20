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
            $table->string('first_name');
            $table->string('rfirst_name');
            $table->string('surname');
            $table->string('rsurname');
            $table->date('dob');
            $table->date('rdob');
            $table->string('document_number');
            $table->string('rdocument_number');
            $table->string('phone');
            $table->string('rphone');
            $table->string('email');
            $table->string('remail');
            $table->longText('address');
            $table->longText('raddress');
            $table->string('cap');
            $table->string('rcap');
            $table->string('country');
            $table->string('rcountry');
            $table->string('state');
            $table->string('rstate');
            $table->string('dist');
            $table->string('rdist');
            $table->string('city');
            $table->string('rcity');
            $table->date('expected_date_to_receive');
            $table->string('delivery_condition');
            $table->integer('numberOfBox');
            $table->decimal('goods_value');
            $table->integer('productType');
            $table->integer('weight');
            $table->integer('perKg');
            $table->decimal('cusCharge');
            $table->decimal('homeDeliveryCharge');
            $table->decimal('addiCharge');
            $table->decimal('total');
            $table->decimal('agent_comm');
            $table->string('delivery_way');
            $table->string('departure_airport');
            $table->string('arrival_airport');
            $table->string('product1');
            $table->string('product2');
            $table->string('product3');
            $table->string('product4');
            $table->string('product5');
            $table->string('quantity1');
            $table->string('quantity2');
            $table->string('quantity3');
            $table->string('quantity4');
            $table->string('quantity5');
            $table->string('status');
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
