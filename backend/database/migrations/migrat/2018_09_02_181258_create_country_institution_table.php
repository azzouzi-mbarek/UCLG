<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryInstitutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_institution', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('institution_id')->unsigned()->index();
            $table->integer('country_id')->unsigned()->index();
            $table->timestamps();
        });
        Schema::table('country_institution', function (Blueprint $table) {
            $table->foreign('institution_id')->references('id')->on('institutions');
            $table->foreign('country_id')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('country_institution');
    }
}
