<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname',200);
            $table->string('cv',200);//save the path to the document - done
            $table->string('cv_real_name',200);
            $table->string('lname',200);
            $table->string('address',200);
            $table->string('email',200);
            $table->string('apply_possition',200);
            $table->string('exprt_yrs',200);
            $table->string('mobile_number',200);
            $table->string('nic',200);
            $table->string('dob',100);
            $table->integer('acc_number');
            $table->string('acc_name');
            $table->string('branch');
            $table->string('bank');
            $table->string('last_possition_name');
            $table->string('last_company_name');
            $table->integer('last_salary');
            $table->string('exprt_areas');
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
        Schema::dropIfExists('people');
    }
}
