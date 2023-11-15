<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name');
            $table->string('lastname')->nullable();
            $table->string('email');
            $table->string('phone_number');
            $table->longText('address');
            $table->longText('billing_address');
            $table->integer('total')->default(0);
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->longText('note')->nullable();
            $table->string('country_code')->nullable();
            $table->string('reference')->nullable();
            $table->string('status')->default('pending');
            $table->timestamp('payment_date')->nullable();
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
};
