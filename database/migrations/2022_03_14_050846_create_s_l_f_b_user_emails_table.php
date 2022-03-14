<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSLFBUserEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_l_f_b_user_emails', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user');
            $table->foreign('user')->on('s_l_f_b_users')->references('id')->onDelete('cascade');

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
        Schema::dropIfExists('s_l_f_b_user_emails');
    }
}
