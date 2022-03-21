<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyDetailsContactNosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_details_contact_nos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('fam_member');
            $table->foreign('fam_member')->on('family_details')->references('id')->onDelete('cascade');

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
        Schema::dropIfExists('family_details_contact_nos');
    }
}
