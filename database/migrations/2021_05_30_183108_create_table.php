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
            $table->id('id_shirt');
            $table->string('name');
            $table->string('size');
            $table->string('brand');
            $table->string('color');
            $table->string('material');
            $table->integer('prize');
        });
        DB::statement("ALTER TABLE shirts ADD image MEDIUMBLOB");

        Schema::create('trousers', function (Blueprint $table) {
            $table->id('id_trouser');
            $table->string('name');
            $table->string('size');
            $table->string('brand');
            $table->string('color');
            $table->string('material');
            $table->integer('prize');
        });
        DB::statement("ALTER TABLE trousers ADD image MEDIUMBLOB");


        Schema::create('hoodies', function (Blueprint $table) {
            $table->id('id_hoodie');
            $table->string('name');
            $table->string('size');
            $table->string('brand');
            $table->string('color');
            $table->string('material');
            $table->integer('prize');
        });
        DB::statement("ALTER TABLE hoodies ADD image MEDIUMBLOB");

        Schema::create('sneakers', function (Blueprint $table) {
            $table->id('id_sneaker');
            $table->string('name');
            $table->string('size');
            $table->string('brand');
            $table->string('color');
            $table->string('material');
            $table->integer('prize');
        });
        DB::statement("ALTER TABLE sneakers ADD image MEDIUMBLOB");

        Schema::create('accessories', function (Blueprint $table) {
            $table->id('id_accessories');
            $table->string('name');
            $table->string('type');
            $table->string('brand');
            $table->integer('prize');
        });
        DB::statement("ALTER TABLE accessories ADD image MEDIUMBLOB");
    }

}
