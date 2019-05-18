<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->integer('product_id');
            $table->integer('user_id')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('name');
            $table->string('Phone');
            $table->string('email')->nullable();
            $table->string('message')->nullable();
            $table->string('shipping_address');
            $table->integer('product_qty');
            $table->string('payment_type');
            $table->string('is_paid')->default(0);
            $table->string('is_completed')->default(0);
            $table->string('is_seen_byadmin')->default(0);
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
