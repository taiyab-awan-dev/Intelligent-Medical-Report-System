<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');

            $table->date('date');
            $table->string('time');
            $table->integer('status');
            $table->integer('patient_weight')->nullable();
            $table->string('disease')->nullable();
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
        Schema::dropIfExists('appointments');
    }
}
