<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePregs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('uasg')->nullable();
            $table->string('preg');
            $table->string('name');
            $table->integer('type')->nullable();
            $table->integer('portal')->nullable();
            $table->integer('status')->nullable();
            $table->date('publication')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->text('obs')->nullable();
            $table->text('tags')->nullable();
            $table->boolean('budget');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pregs');
    }
}
