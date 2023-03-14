<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->unique();
            $table->string('description', 255)->nullable();
            $table->string('status', 1);
            $table->timestamps();
            $table->softDeletes();
        });

        // departments_doctors
        Schema::create('departments_doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('doctors_id');
            $table->unsignedBigInteger('departments_id');
            $table->unique(['departments_id','doctors_id']);
            $table->foreign('departments_id')->references('id')->on('departments')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('doctors_id')->references('id')->on('doctors')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
            $table->softDeletes();
            $table->index(['doctors_id', 'departments_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
        Schema::dropIfExists('departments_doctors');

        Schema::table('departments', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('departments_doctors', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
    
}
