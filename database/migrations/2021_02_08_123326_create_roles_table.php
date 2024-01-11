<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{

public function up()
{
Schema::create('roles',function (Blueprint $table) {
$table->Increments('role_id');
$table->string('role_name');
$table->integer('is_active')->default(1);
$table->timestamps();
});
}


public function down()
{
Schema::dropIfExists('roles');
}
}
