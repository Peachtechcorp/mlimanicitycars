<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger("brand_id")->unsigned(); $table->foreign("brand_id")->references("id")->on("brands");
            $table->bigInteger("modeli_id")->unsigned(); $table->foreign("modeli_id")->references("id")->on("modelis");
            $table->bigInteger("model_code_id")->unsigned()->nullable(); $table->foreign("model_code_id")->references("id")->on("model_codes");
            $table->bigInteger("body_id")->unsigned(); $table->foreign("body_id")->references("id")->on("bodies");
            $table->bigInteger("fuel_id")->unsigned(); $table->foreign("fuel_id")->references("id")->on("fuels");
            $table->bigInteger("transmission_id")->unsigned(); $table->foreign("transmission_id")->references("id")->on("transmissions");
            $table->bigInteger("wheel_id")->unsigned(); $table->foreign("wheel_id")->references("id")->on("wheels");
            $table->bigInteger("drive_unit_id")->unsigned(); $table->foreign("drive_unit_id")->references("id")->on("drive_units");
            $table->bigInteger("color_id")->unsigned(); $table->foreign("color_id")->references("id")->on("colors");
            $table->bigInteger("ref_no")->nullable();
            $table->string("chassis")->nullable();
            $table->string("class")->nullable();
            $table->bigInteger("millage")->nullable();
            $table->bigInteger("engine_cc")->nullable();
            $table->integer("registration_year")->nullable();
            $table->integer("manufacture_year")->nullable();
            $table->integer("seats")->nullable();
            $table->integer("doors")->nullable();
            $table->string("dimension")->nullable();
            $table->float("meter_cubic")->nullable();
            $table->float("weight")->nullable();
            $table->text("seller_comment")->nullable();
            $table->string("imported_from")->nullable();
            $table->string("customs_valuation")->nullable();
            $table->string("first_user")->nullable();
            $table->string("video_link")->nullable();
            $table->string("first_seller")->nullable();
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
        Schema::dropIfExists('cars');
    }
}
