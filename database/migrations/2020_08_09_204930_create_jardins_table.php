<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJardinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jardins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->longText('image');
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
        Schema::dropIfExists('jardins');
    }
}
