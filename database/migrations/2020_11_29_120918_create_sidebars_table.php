<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSidebarsTable extends Migration
{
    /**
     * @note Table: Sidebar
     * @note Table: SidebarItem for sidebar
     * @note Relation: Whit SidebarItem
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sidebars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('prepend_icon')->nullable();
            $table->string('append_icon')->nullable();
            $table->boolean('active')->default(false);
            $table->timestamps();
        });

        Schema::create('sidebar_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sidebar_id')->constrained('sidebars')->onDelete('cascade');
            $table->string('title');
            $table->string('slug');
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
        Schema::dropIfExists('sidebar_items');
        Schema::dropIfExists('sidebars');
    }
}
