<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
$table->Increments('id');
$table->string('name');
$table->string('email')->unique();

$table->string('password');
$table->rememberToken();
$table->integer('pin');
$table->string('contact_number');


$table->integer('role_id')->unsigned();
$table->foreign('role_id')->references('role_id')->on('roles');

$table->integer('is_active')->default('1');
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
Schema::dropIfExists('users');
}
}
