<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shirts', function (Blueprint $table) {
            $table->id('id_shirts');
            $table->varchar('name');
            $table->varchar('size');
            $table->varchar('brand');
            $table->varchar('color');
            $table->varchar('material');
            $table->int('prize');
        });
    }

}
