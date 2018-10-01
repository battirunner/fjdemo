<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTakkenshiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('takkenshi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('t_id');
            $table->string('email');
            $table->boolean('work_status');
            $table->boolean('work_status');
            
            

            
            
            
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
        Schema::dropIfExists('takkenshi');
    }
}
