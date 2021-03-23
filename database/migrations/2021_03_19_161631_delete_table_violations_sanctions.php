<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteTableViolationsSanctions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('violation_sanctions');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::create('violation_sanctions', function (Blueprint $table) {
            
            $table->id();
            $table->integer('violation_id');
            $table->string('offense');
            $table->string('details');
            $table->softDeletes();
            $table->timestamps();
        });
    }
}
