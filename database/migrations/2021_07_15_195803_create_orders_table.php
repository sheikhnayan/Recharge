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
            $table->string('surname');
            $table->date('dob');
            $table->string('document_number');
            $table->string('phone');
            $table->string('email');
            $table->longText('address');
            $table->string('cap');
            $table->string('country');
            $table->string('state');
            $table->string('dist');
            $table->string('city');
            $table->date('expected_date_to_receive');
            $table->string('delivery_condition');
            $table->int('numberOfBox');
            $table->decimal('goods_value');
            $table->int('productType');
            $table->int('weight');
            $table->int('perKg');
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
