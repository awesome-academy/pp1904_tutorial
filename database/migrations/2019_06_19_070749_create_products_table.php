<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('productCode', 20)->unique();
            $table->string('productName', 50);
            $table->string('productLine', 100);
            $table->string('productScale', 100);
            $table->string('productVendor', 100);
            $table->text('productDescription');
            $table->integer('quantityInStock');
            $table->double('buyPrice');
            $table->string('MSRP', 5);
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
        Schema::dropIfExists('products');
    }
}
