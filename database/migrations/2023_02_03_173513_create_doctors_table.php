<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->char('employee_no', 100)->unique();
            $table->string('first_name', 150);
            $table->string('middle_name', 255)->nullable();
            $table->string('last_name', 255);
            $table->string('email', 55)->nullable();
            $table->string('designation', 255)->nullable();
            $table->string('specialist_area', 255)->nullable();
            
            $table->date('dob')->nullable();
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->string('contact_1', 16)->nullable();
            $table->string('contact_2', 16)->nullable();
            $table->string('address', 255)->nullable();

            $table->string('kin_name', 255)->nullable();
            $table->string('kin_phone', 16)->nullable();
            $table->string('kin_email', 55)->nullable();

            $table->string('information', 255)->nullable();
           
           // $table->integer('experience', 10);
            $table->timestamps();
            $table->foreign('gender_id')->references('id')->on('genders'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}


/*

Password



Address
Phone No
Mobile No
Short Biography
Picture



Blood Group
Education/Degree

Blood Group
Education/Degree
Status - Active Inactive


*/