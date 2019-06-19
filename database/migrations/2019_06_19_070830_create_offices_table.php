<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('officeCode', 20)->unique();
            $table->string('city', 20);
            $table->string('phone', 15);
            $table->string('addressLine1', 255);
            $table->string('addressLine2', 255);
            $table->smallInteger('state');
            $table->string('country', 50);
            $table->string('postCode', 10);
            $table->string('temitory', 100);
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
        Schema::dropIfExists('offices');
    }
}
