<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OfferJobCandidat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_job_candidat', function (Blueprint $table) {
            $table->unsignedBigInteger('offer_job_id');
            $table->unsignedBigInteger('candidat_id');
            $table->foreign('offer_job_id')->references('id')->on('job_offer_desc')->onDelete('cascade');
            $table->foreign('candidat_id')->references('id')->on('candidat_table')->onDelete('cascade');
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
        //
    }
}
