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
            $table->string('employee_no', 24)->unique();
            $table->string('first_name', 150);
            $table->string('last_name', 255);
            $table->string('email', 55)->nullable();
            $table->string('contact_1', 14)->nullable();
            $table->string('contact_2', 14)->nullable();
            $table->string('title', 150);
            $table->string('degree', 255);
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
