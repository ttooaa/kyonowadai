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
            $table->foreignId('prefecture_id')
            ->nullable()
            ->constrained();
            $table->string('email')->unique();
            //メール送信機能 未実装
            $table->timestamp('email_verified_at')->nullable();
            $table->string('name')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('sex')->nullable();
            $table->integer('age')->nullable();
            $table->string('hobby')->nullable();
            $table->string('profile')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('users');
    }
}
