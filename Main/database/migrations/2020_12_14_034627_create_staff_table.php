<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->unsignedBigInteger('staff_id');
            $table->foreign('staff_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('specialization')->nullable();
            $table->integer('stafftype'); // 0= paramedical //1=medical
            $table->string('pmdcNo')->nullable();
            $table->string('technology')->nullable();
            $table->string('qualifications');
            $table->timestamps();
            $table->primary('staff_id');
            $table->string('timefrom')->nullable();
            $table->string('timeto')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
