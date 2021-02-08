<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained('categories');
            $table->string('category');
            $table->timestamps();
        });

        Schema::create('categoryables', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained('categories');
            $table->morphs('categoryable');
        });

        Schema::create('category_brands', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
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
        Schema::dropIfExists('category_brands');
        Schema::dropIfExists('categoryables');
        Schema::dropIfExists('categories');
    }
}
