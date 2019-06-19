<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customerNumber', 50)->unique();
            $table->string('customerName', 50);
            $table->string('customerLastName', 50);
            $table->string('customerFirstName', 50);
            $table->string('phone', 20);
            $table->string('addressLine1', 255);
            $table->string('addressLine2', 255);
            $table->string('city', 50);
            $table->smallInteger('state');
            $table->string('postCode', 10);
            $table->string('country', 50);
            $table->string('saleRepEmployeeNumber', 20);
            $table->double('creditLimit');
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
        Schema::dropIfExists('customers');
    }
}
