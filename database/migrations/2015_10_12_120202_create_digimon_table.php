<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDigimonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('digimon', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("level");
            $table->string("attr");
            $table->string("attack_type");
            $table->string("attr_elem");
            $table->string("family");
            $table->string("evo_from");
            $table->string("evo_to");
            $table->string("image");
            $table->integer("hp");
            $table->integer("ds");
            $table->integer("at");
            $table->float("as");
            $table->integer("ct");
            $table->integer("ht");
            $table->integer("de");
            $table->integer("ev");
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
        Schema::drop('digimon');
    }
}
