<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("title");
            $table->text('description');
            $table->string('photo')->default('https://i.stack.imgur.com/l60Hf.png');
            $table->string('time');
            $table->integer('number_people');
            $table->string('youtube_url')->nullable();
            $table->integer('rating')->default(0);
            $table->string('type')->default('recipe');
            $table->string('status')->default('panding');
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
        Schema::dropIfExists('recipes');
    }
}
