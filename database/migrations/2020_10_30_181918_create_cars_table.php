<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{

    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();

            $table->text('name');
            $table->text('rarity');
            $table->text('colour');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
