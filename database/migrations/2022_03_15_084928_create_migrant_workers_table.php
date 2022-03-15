<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMigrantWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('migrant_workers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade');

            $table->string('fname');
            $table->string('lname');
            $table->string('full_name');
            $table->string('name_with_init');
            $table->string('country');
            $table->string('workplace');
            $table->string('workplace_address');
            $table->string('address_in_sl');
            $table->integer('no_of_dependants');
            $table->date('dob');
            $table->integer('age');
            $table->string('visa_no');
            $table->string('passport_no');
            $table->date('passport_exp_date');

            $table->unsignedBigInteger('agency')->nullable();
            $table->foreign('agency')->on('agencies')->references('id')->onDelete('set null');

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
        Schema::dropIfExists('migrant_workers');
    }
}
