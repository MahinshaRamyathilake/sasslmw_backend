<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmbassyContactNosTable extends Migration
{
    /**
     * Run the migrations.
     *     * @return void
     */
    public function up()
    {
        Schema::create('embassy_contact_nos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('embassy_id');
            $table->foreign('embassy_id')->on('embassies')->references('id')->onDelete('cascade');
            $table->integer('contact_no');
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
        Schema::dropIfExists('embassy_contact_nos');
    }
}
