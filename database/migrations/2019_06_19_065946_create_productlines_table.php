<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productlines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('productLine', 100)->unique();
            $table->text('textDescription');
            $table->text('htmlDescription');
            $table->string('images', 200);
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
        Schema::dropIfExists('productlines');
    }
}
