<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patientname');
            $table->string('patientemail');
            $table->string('patientcontact');
            $table->string('patientaddress');
            $table->string('doctorname');
            $table->string('doctoremail');
            $table->string('generatedBy');
            $table->string('patientame');
            $table->unsignedBigInteger('amount');
            $table->date('date');
            $table->string('time');
            $table->unsignedbigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('users');
            $table->unsignedbigInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('users');
            $table->unique(['doctor_id','date','time']);
            $table->timestamps();

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
        Schema::dropIfExists('Invoice');
    }
}
