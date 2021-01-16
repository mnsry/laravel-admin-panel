<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('family')->nullable();
            $table->string('avatar')->nullable();
            $table->string('mobile')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('user_blocks', function (Blueprint $table) {
            $table->foreignId('user_blocking')->constrained('users')->onDelete('cascade');
            $table->foreignId('user_blocked')->constrained('users')->onDelete('cascade');
            $table->primary(['user_blocking', 'user_blocked']);
        });

        Schema::create('user_followers', function (Blueprint $table) {
            $table->foreignId('user_following')->constrained('users')->onDelete('cascade');
            $table->foreignId('user_followed')->constrained('users')->onDelete('cascade');
            $table->primary(['user_following', 'user_followed']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_followers');
        Schema::dropIfExists('user_blocks');
        Schema::dropIfExists('users');
    }
}
