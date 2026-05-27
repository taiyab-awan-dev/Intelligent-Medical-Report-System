<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('patientname');
            $table->string('patientemail');
            $table->string('patientcontact')->nullable();
            $table->string('patientaddress')->nullable();
            $table->string('doctorname');
            $table->string('doctoremail');
            $table->string('generatedBy');
            $table->unsignedBigInteger('amount');
            $table->date('date');
            $table->string('time');
            $table->unsignedBigInteger('status');
            $table->unsignedbigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('users');
            $table->unsignedbigInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('users');
            $table->unique(['doctor_id','date','time']);
            
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
        Schema::dropIfExists('invoices');
    }
}
