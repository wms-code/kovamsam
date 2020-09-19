<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('contact_no')->unique(); 
            $table->unsignedBigInteger('age_id')->nullable(); 
            $table->unsignedBigInteger('education_id')->nullable(); 
            $table->unsignedBigInteger('height_id')->nullable();              
            $table->unsignedBigInteger('income_id')->nullable(); 
            $table->unsignedBigInteger('naadu_id')->nullable(); 
            $table->unsignedBigInteger('places_id')->nullable();              
            $table->unsignedBigInteger('subcaste_id')->nullable(); 
            $table->unsignedBigInteger('place_id')->nullable(); 
            $table->unsignedBigInteger('work_id')->nullable(); 
            $table->unsignedBigInteger('weight_id')->nullable();
            $table->unsignedBigInteger('caste_id')->nullable();  
            $table->string('remarks', 100)->nullable();  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('place_id');
            $table->dropColumn('naadu_id');
            $table->dropColumn('remarks');

            
        });
    }
}
