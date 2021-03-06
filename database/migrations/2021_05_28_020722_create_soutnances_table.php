<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoutnancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soutnances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('groupe');
            $table->string('cin');
            $table->string('image')->nullable();
            $table->string('sujet_pfe');
            $table->string('etablissement');
            $table->boolean('validation')->default(true);
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
        Schema::dropIfExists('soutnances');
    }
}
