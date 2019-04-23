<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // dito para makapagcreate ng mga tables sa database natin sa myphpAdmin 
        Schema::create('modelos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string ('title');   //eto dinagdaglang natin, maraming pagpipiliin sa laravel Schema
            $table->longtext('content'); // pti ito galing din sa laravel schema
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
        Schema::dropIfExists('modelos');
    }
}
