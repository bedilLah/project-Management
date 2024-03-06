<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRisksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('risks', function (Blueprint $table) {
            $table->id();
            $table->string('name_project');
            $table->string('risk_type');
            $table->string('risk_owner');
            $table->text('description_ofrisk');
            $table->integer('risk_rating');
            $table->integer('probability');
            $table->integer('impact');
            $table->string('risk_treatment');
            $table->string('describe_action');
            $tabel->string('impact_description');
            $tabel->string('action_toreduce');
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
        Schema::dropIfExists('risks');
    }
}
