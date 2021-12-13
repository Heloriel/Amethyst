<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('rank');
            $table->text('avatar_url');
            $table->boolean('primary');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(array(
            'first_name' => 'Root',
            'last_name' => 'Primary',
            'username' => 'root',
            'email' => 'root@admin.com',
            'password' => bcrypt('root'),
            'rank' => 3,
            'avatar_url' => '/img/avatar/Logo-short.svg',
            'primary' => true
        ));
        DB::table('users')->insert(array(
            'first_name' => 'John',
            'last_name' => 'Doe',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'rank' => 3,
            'avatar_url' => '/img/avatar/johndoe.jpg',
            'primary' => false
        ));
        DB::table('users')->insert(array(
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'username' => 'operator',
            'email' => 'operator@admin.com',
            'password' => bcrypt('operator'),
            'rank' => 2,
            'avatar_url' => '/img/avatar/janedoe.jpg',
            'primary' => false
        ));
        DB::table('users')->insert(array(
            'first_name' => 'Jimmy',
            'last_name' => 'Doe',
            'username' => 'reader',
            'email' => 'reader@admin.com',
            'password' => bcrypt('reader'),
            'rank' => 1,
            'avatar_url' => '/img/avatar/jimmy.jpg',
            'primary' => false
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
