<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
        });

        DB::table('types')->insert(array('name' => 'Pregão Eletrônico'));
        DB::table('types')->insert(array('name' => 'Convite'));
        DB::table('types')->insert(array('name' => 'Dispensa de Licitação'));
        DB::table('types')->insert(array('name' => 'Pregão Presencial'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('types');
    }
}
