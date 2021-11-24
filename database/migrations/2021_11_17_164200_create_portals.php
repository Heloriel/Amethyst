<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;

class CreatePortals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name");
            $table->text('base_url');
        });

        DB::table('portals')->insert(array('name' => 'Comprasnet', 'base_url' => 'www.comprasnet.gov.br/'));
        DB::table('portals')->insert(array('name' => 'Licitações-E', 'base_url' => 'www.licitacoes-e.com.br/'));
        DB::table('portals')->insert(array('name' => 'BEC-SP', 'base_url' => 'https://www.bec.sp.gov.br/'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portals');
    }
}
