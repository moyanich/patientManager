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
            $table->string('last_name', 255);
            $table->string('email', 55)->nullable();
            $table->string('designation', 255)->nullable();
            $table->string('degrees', 255)->nullable();




            $table->string('contact_1', 14)->nullable();
            $table->string('contact_2', 14)->nullable();
            
            $table->string('degree', 255)->nullable();
           // $table->integer('experience', 10);
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
        Schema::dropIfExists('doctors');
    }
}


/*

Password
Designation
Department

Address
Phone No
Mobile No
Short Biography
Picture
Specialist Area
Date of Birth
Gender
Blood Group
Education/Degree

Blood Group
Education/Degree
Status - Active Inactive


*/