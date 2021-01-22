<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalNumberVisitsTable extends Migration
{
    /**
     * @note For View Of Site
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_personal_number_visits', function (Blueprint $table) {
            $table->id();
            $table->integer('seen')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_number_visits');
    }
}
