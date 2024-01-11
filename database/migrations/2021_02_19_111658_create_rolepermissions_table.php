<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolepermissionsTable extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::create('rolepermissions', function (Blueprint $table) {
$table->Increments('rolepermissions_id');
$table->integer('role_id')->unsigned();
$table->foreign('role_id')->references('role_id')->on('roles');
$table->integer('permission_id')->unsigned();
$table->foreign('permission_id')->references('permission_id')->on('permissions');

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
Schema::dropIfExists('rolepermissions');
}
}
