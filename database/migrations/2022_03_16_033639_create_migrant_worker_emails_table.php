<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMigrantWorkerEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('migrant_worker_emails', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user');
            $table->foreign('user')->on('migrant_workers')->references('id')->onDelete('cascade');

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
        Schema::dropIfExists('migrant_worker_emails');
    }
}
