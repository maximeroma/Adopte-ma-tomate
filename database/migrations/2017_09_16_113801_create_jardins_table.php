<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJardinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jardins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_users');
            $table->integer('superficie');
            $table->string('whishlist');
            $table->string('besoins_humains');
            $table->string('photos')->default('jardinDefault.jpg');
            $table->string('description');
            $table->integer('fk_lieux');
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
        Schema::dropIfExists('jardins');
    }
}
