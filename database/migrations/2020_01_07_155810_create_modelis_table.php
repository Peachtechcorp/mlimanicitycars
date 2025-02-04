<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger("brand_id")->unsigned();
            $table->string("name");
            $table->foreign("brand_id")->references("id")->on("brands");
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
        Schema::dropIfExists('modelis');
    }
}
