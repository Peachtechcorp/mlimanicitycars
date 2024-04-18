<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_issues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger("car_id")->unsigned(); $table->foreign("car_id")->references("id")->on("cars");
            $table->text("issue");
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
        Schema::dropIfExists('car_issues');
    }
}
