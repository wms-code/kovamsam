<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcasteTable extends Migration
{
     
    public function up()
    {
        
        Schema::create('subcaste', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->unique();  
            $table->unsignedBigInteger('place_id')->nullable();
            $table->string('remarks', 100)->nullable();       
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('subcaste');
    }
}
