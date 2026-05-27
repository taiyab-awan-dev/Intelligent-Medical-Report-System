<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceptionistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receptionists', function (Blueprint $table) {
            $table->unsignedBigInteger('receptionist_id');
            $table->foreign('receptionist_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('qualifications');
            $table->timestamps();
            $table->primary('receptionist_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receptionists');
    }
}
