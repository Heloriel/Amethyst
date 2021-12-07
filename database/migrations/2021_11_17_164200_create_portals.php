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
            $table->text('direct_url');
        });

        DB::table('portals')->insert(array(
            'name' => 'Comprasnet',
            'base_url' => 'https://www.gov.br/compras/pt-br/',
            'direct_url' => 'http://comprasnet.gov.br/livre/Pregao/lista_pregao.asp?Opc=0&rdTpPregao=E&co_uasg=DATA_UASG&numprp=DATA_PREG'
        ));
        DB::table('portals')->insert(array(
            'name' => 'Licitações-E',
            'base_url' => 'http://www.licitacoes-e.com.br/',
            'direct_url' => 'http://comprasnet.gov.br/livre/Pregao/lista_pregao.asp?Opc=0&rdTpPregao=E&co_uasg=DATA_UASG&numprp=DATA_PREG'
        ));
        DB::table('portals')->insert(array(
            'name' => 'BEC-SP',
            'base_url' => 'https://www.bec.sp.gov.br/',
            'direct_url' => 'http://comprasnet.gov.br/livre/Pregao/lista_pregao.asp?Opc=0&rdTpPregao=E&co_uasg=DATA_UASG&numprp=DATA_PREG'
        ));
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
