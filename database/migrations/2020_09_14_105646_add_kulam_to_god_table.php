<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKulamToGodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('god', function (Blueprint $table) {
            $table->unsignedBigInteger('place_id')->nullable(); 
            $table->unsignedBigInteger('kulam_id')->nullable(); 
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
        Schema::table('god', function (Blueprint $table) {
            $table->dropColumn('place_id');
            $table->dropColumn('kulam_id');
            $table->dropColumn('remarks');

            
        });
    }
}
