<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->string('acronym');
            $table->longText('description');
            $table->year('foundation_year');
            $table->string('country_seat');
            $table->string('areas_intervention');
            $table->string('target_beneficiary');
            $table->string('web_site');
            $table->string('email');
            $table->string('number_phone');
            $table->string('address');
            $table->integer('category_institution_id')->unsigned()->index();
            $table->timestamps();
        });
        Schema::table('institutions', function (Blueprint $table) {
            $table->foreign('category_institution_id')->references('id')->on('category_institutions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutions');
    }
}
