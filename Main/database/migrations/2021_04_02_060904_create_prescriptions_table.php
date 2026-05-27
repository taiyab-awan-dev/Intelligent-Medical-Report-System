<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->increments('id');

            $table->date('date');
            $table->string('time');


            $table->unsignedbigInteger('patient_id');

            $table->foreign('patient_id')->references('id')->on('users');

            $table->unsignedbigInteger('doctor_id');

            $table->foreign('doctor_id')->references('id')->on('users');
            $table->unsignedInteger('appointment_id');
            $table->foreign('appointment_id')->references('id')->on('appointments');
            $table->timestamps();
            $table->string('med_name');
            $table->string('med_description');
            $table->string('med_type');
            $table->string('med_dose');

            $table->unique(['doctor_id','date','time','patient_id','med_name']);

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prescriptions');
    }
}
