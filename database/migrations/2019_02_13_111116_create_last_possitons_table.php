<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLastPossitonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('last_possitons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('possition_name',100);
            $table->string('last_company_name',100);
            $table->integer('last_salary');
            $table->integer('person_id')->unsigned();
            $table->foreign('person_id')->references('id')->on('users');
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
        Schema::dropIfExists('last_possitons');
    }
}
