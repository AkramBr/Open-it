<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConcours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('entreprise_c');
            $table->string('mail_c');
            $table->bigInteger('tel_c');
            $table->string('adresse_c');
            $table->string('description_c');
            $table->date('date_fin_c');
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
        Schema::drop('concours');
    }
}
