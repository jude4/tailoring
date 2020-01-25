<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeasurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measurements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('product_name')->nullable();
            $table->string('fabric')->nullable();
            $table->string('quantity')->nullable();
            $table->string('length')->nullable();
            $table->string('bust_size')->nullable();
            $table->string('shoulder_size')->nullable();
            $table->string('sleeve_length')->nullable();
            $table->string('round_curve')->nullable();
            $table->string('waist_size')->nullable();
            $table->string('Hip_size')->nullable();
            $table->string('knee_length')->nullable();
            $table->string('thigh')->nullable();
            $table->string('image')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('measurements');
    }
}
