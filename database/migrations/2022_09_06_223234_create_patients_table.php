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
            $table->id();
            $table->string('patient_no', 6)->unique();
            $table->integer('address_id')->nullable();
            $table->string('first_name', 150);
            $table->string('middle_name')->nullable();
            $table->string('last_name', 255);
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->date('dob')->nullable();
            $table->date('registration_date');
            $table->string('home_phone', 10)->nullable();
            $table->string('cell_number', 10)->nullable();
            $table->string('email', 50)->nullable();

            $table->string('emergency_number')->nullable();
            $table->char('nis', 9)->nullable()->unique();
            $table->char('trn', 9)->nullable()->unique();
            $table->mediumText('city')->nullable();
            $table->integer('parish_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('gender_id')->references('id')->on('genders');            
        });

        Schema::table('patients', function (Blueprint $table) {
            

           // $table->foreignId('role_id')->constrained('roles')->cascadeOnDelete();
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
