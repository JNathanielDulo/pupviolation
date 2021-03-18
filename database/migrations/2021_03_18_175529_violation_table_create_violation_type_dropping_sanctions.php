<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ViolationTableCreateViolationTypeDroppingSanctions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('violations',function(Blueprint $table){
            $table->string('type');
            $table->dropColumn('disciplinarySanctions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('violations',function(Blueprint $table){
            $table->dropColumn('type');
            $table->string('disciplinarySanctions');
        });
    }
}
