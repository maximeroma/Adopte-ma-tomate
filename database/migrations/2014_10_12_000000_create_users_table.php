<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('prenom')->default('maxime');
            $table->string('pseudo')->default('max');
            $table->string('tel')->default('0987654321');
            $table->string('sexe')->default('m');
            $table->string('email')->unique();
            $table->string('birthday')->default('09-12-1965');
            $table->string('fk_adresses')->default('1');
            $table->string('level')->default('1');
            $table->string('description')->default('passioné de jardinage');
            $table->string('password');
            $table->rememberToken();
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
