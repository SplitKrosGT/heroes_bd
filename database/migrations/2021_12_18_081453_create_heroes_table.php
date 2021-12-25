<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name_hero')
                ->comment('имя героя');
            $table->string('universe')
                ->comment('вселенная героя');
            $table->string('ability')
                ->comment('способность героя');
            $table->bigInteger('age')
                ->comment('возраст героя');
            $table->string('main_villain')
                ->comment('главный злодей');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heroes');
    }
}
