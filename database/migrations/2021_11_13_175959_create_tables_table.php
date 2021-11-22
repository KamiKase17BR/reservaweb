<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('id_parceiro');
            $table->integer('id_restaurant');
            $table->integer('lugares');
            $table->string('descricao');
            $table->boolean('hour08');
            $table->boolean('hour09');
            $table->boolean('hour10');
            $table->boolean('hour11');
            $table->boolean('hour12');
            $table->boolean('hour13');
            $table->boolean('hour14');
            $table->boolean('hour15');
            $table->boolean('hour16');
            $table->boolean('hour17');
            $table->boolean('hour18');
            $table->boolean('hour19');
            $table->boolean('hour20');
            $table->boolean('hour21');
            $table->boolean('hour22');
            $table->string('image');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables');
    }
}
