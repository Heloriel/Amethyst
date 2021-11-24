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

        DB::table('statuses')->insert(array('name' => 'Publicado', 'color' => 'darkgrey'));
        DB::table('statuses')->insert(array('name' => 'Aguardando Documentação', 'color' => 'orange'));
        DB::table('statuses')->insert(array('name' => 'Aguardando Disputa', 'color' => 'lightslategray'));
        DB::table('statuses')->insert(array('name' => 'Em Disputa', 'color' => 'red'));
        DB::table('statuses')->insert(array('name' => 'Acompanhamento', 'color' => 'gold'));
        DB::table('statuses')->insert(array('name' => 'Habilitação', 'color' => 'darkseagreen'));
        DB::table('statuses')->insert(array('name' => 'Homologado', 'color' => 'green'));
        DB::table('statuses')->insert(array('name' => 'Encerrado', 'color' => 'darkred'));
        DB::table('statuses')->insert(array('name' => 'Cancelado', 'color' => 'black'));
        DB::table('statuses')->insert(array('name' => 'Desclassificado', 'color' => 'black'));
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
