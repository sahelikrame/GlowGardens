<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBulbeusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bulbeuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('image');
            $table->longText('description');
            $table->longText('nom_botanique');
            $table->longText('info_plante');
            $table->longText('particularites');
            $table->longText('avantages');
            $table->longText('exposition');
            $table->longText('sol');
            $table->longText('quand_semer');
            $table->longText('comment_semer');
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
        Schema::dropIfExists('bulbeuses');
    }
}
