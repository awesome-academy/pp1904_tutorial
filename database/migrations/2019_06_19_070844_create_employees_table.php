<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employeeNumber', 20)->unique();
            $table->string('lastname', 50);
            $table->string('firstName', 50);
            $table->string('extention', 20);
            $table->string('email', 50)->unique();
            $table->string('officeCode', 20);
            $table->string('reportTo', 50);
            $table->string('jobTitle', 50);
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
        Schema::dropIfExists('employees');
    }
}
