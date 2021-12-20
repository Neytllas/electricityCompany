<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('Surname');
            $table->string('Name');
            $table->string('MiddleName');
            $table->bigInteger('PhoneNumber');
            $table->string('Email');
            $table->string('City');
            $table->string('Street');
            $table->string('HouseNumber');
            $table->string('Flat');
            $table->tinyInteger('NumberRooms');
            $table->tinyInteger('NumberTenats');
            $table->bigInteger('Login');
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
        Schema::dropIfExists('clients');
    }
}
