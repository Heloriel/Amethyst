<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;

class CreateStatuses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name");
            $table->string("color");
        });

        DB::table('statuses')->insert(array('name' => 'Publicado', 'color' => '#A9A9A9'));
        DB::table('statuses')->insert(array('name' => 'Aguardando Documentação', 'color' => '#FF8C00'));
        DB::table('statuses')->insert(array('name' => 'Aguardando Disputa', 'color' => '#778899'));
        DB::table('statuses')->insert(array('name' => 'Em Disputa', 'color' => '#FF0000'));
        DB::table('statuses')->insert(array('name' => 'Acompanhamento', 'color' => '#FFD700'));
        DB::table('statuses')->insert(array('name' => 'Habilitação', 'color' => '#8FBC8F'));
        DB::table('statuses')->insert(array('name' => 'Homologado', 'color' => '#008000'));
        DB::table('statuses')->insert(array('name' => 'Encerrado', 'color' => '#8B0000'));
        DB::table('statuses')->insert(array('name' => 'Cancelado', 'color' => '#000000'));
        DB::table('statuses')->insert(array('name' => 'Desclassificado', 'color' => '#000000'));
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statuses');
    }
}
