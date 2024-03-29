<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('position');
            $table->tinyInteger('status')->default(1);
            $table->string('email')->nullable();
            $table->string('national_id')->nullable();
            $table->string('phone')->nullable();
            $table->string('next_of_kin')->nullable();
            $table->string('address')->nullable();
            $table->string('sex')->nullable();
            $table->string('employment_history')->nullable();
            $table->string('engagement_date')->nullable();
            $table->string('termination_date')->nullable();
            $table->string('national_id_image')->nullable();
            $table->integer('added_by');
            $table->string('contract')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
