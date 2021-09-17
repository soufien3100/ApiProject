<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstructorsTable extends Migration
{
    public function up()
    {
        Schema::create('constructors', function (Blueprint $table) {
            $table->id('constructorId');
            $table->string('constructorRef');
            $table->string('name');
            $table->string('nationality')->nullable();
            $table->string('url');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('constructors');
    }
}
