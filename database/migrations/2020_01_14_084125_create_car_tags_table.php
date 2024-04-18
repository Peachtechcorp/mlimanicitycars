<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger("car_id")->unsigned(); $table->foreign("car_id")->references("id")->on("cars");
            $table->bigInteger("tag_id")->unsigned(); $table->foreign("tag_id")->references("id")->on("tags");
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
        Schema::dropIfExists('cars_tags');
    }
}
