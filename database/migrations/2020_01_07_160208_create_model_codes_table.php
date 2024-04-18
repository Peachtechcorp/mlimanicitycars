<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_codes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger("modeli_id")->unsigned();
            $table->string("name");
            $table->foreign("modeli_id")->references("id")->on("modelis");
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
        Schema::dropIfExists('model_codes');
    }
}
