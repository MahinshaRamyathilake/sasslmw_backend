<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmbassyUserEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('embassy_user_emails', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user');
            $table->foreign('user')->on('embassy_users')->references('id')->onDelete('cascade');

            $table->string('email');
            
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
        Schema::dropIfExists('embassy_user_emails');
    }
}
