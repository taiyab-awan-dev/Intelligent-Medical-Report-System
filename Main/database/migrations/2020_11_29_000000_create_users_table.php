<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('username')->nullable()->unique();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('contact')->nullable();
            $table->string('address')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->date('joined_date')->nullable();
            $table->integer('type')->default(4);//1 for accountant 2= Staff 3=Receptionist 4=patient -1=admin
            $table->rememberToken();
            $table->timestamps();
        });
        // Insert some stuff
    DB::table('users')->insert(
        array(
            'id' => 1,
            'email' => 'admin@admin.com',
            'name' => 'admin',
            'type' => 0,
            'image' => 'user.png',
            'password' => '$2y$10$MvJ.i7oJ6hEMKj.eBMZkRe9yfS5isG.AdYXjjhAu2z6oA5eb0xs06'
   
            
            
        )
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
