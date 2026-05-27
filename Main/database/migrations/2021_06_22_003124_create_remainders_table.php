<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemaindersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remainders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('status');

            $table->unsignedbigInteger('patient_id');

            $table->foreign('patient_id')->references('id')->on('users');
            
            $table->unsignedInteger('appointment_id');
            $table->foreign('appointment_id')->references('id')->on('appointments');

            $table->unsignedbigInteger('doctor_id');

            $table->foreign('doctor_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remainders');
    }
}
