<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expences', function (Blueprint $table) {
           $table->Increments('expences_id');
$table->string('food');
$table->string('travel_charge');
$table->string('spend_clint');
$table->string('pay_mode');
$table->string('pay_date');
$table->string('place');
$table->string('pay_by');
$table->integer('is_active')->default(1);
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
        Schema::dropIfExists('expences');
    }
}
