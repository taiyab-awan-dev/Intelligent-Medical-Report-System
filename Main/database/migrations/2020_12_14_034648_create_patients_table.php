<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('homeNo')->nullable();;
            $table->string('martial_status')->nullable();;
            $table->string('emergency_contact')->nullable();;
            $table->string('Trusted_email')->nullable();;
            $table->string('postal_code')->nullable();;
            $table->string('city')->nullable();;
            $table->string('mother_name')->nullable();;
            $table->string('workNo')->nullable();;
            $table->string('occupation')->nullable();;
            $table->string('industry')->nullable();;
            $table->string('employer_city')->nullable();;
            $table->string('employer_postal_code')->nullable();;
            $table->string('language')->nullable();;
            $table->integer('family_size')->nullable();;
            $table->integer('income')->nullable();;
            $table->string('refferal_source')->nullable();;
            $table->string('religion')->nullable();;
            $table->string('migrant_or_seasonal')->nullable();;
            $table->string('guardian_address')->nullable();;
            $table->string('guardian_name')->nullable();;
            $table->string('guardian_contact')->nullable();;
            $table->string('guardian_city')->nullable();;
            $table->string('guardian_postal_code')->nullable();;
            $table->string('guardian_workNo')->nullable();;
            $table->string('symptoms')->nullable();
            $table->timestamps();
            $table->primary('patient_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
