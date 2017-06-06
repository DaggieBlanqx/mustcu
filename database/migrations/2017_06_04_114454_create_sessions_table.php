<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function(Blueprint $table){
	        $table->tinyInteger('session_sem')->default(0);
	        $table->tinyInteger('is_active_sem')->default(0);
	        $table->string('academic_year');
	        $table->string('current_year');
	        $table->dateTime('start_date');
	        $table->dateTime('end_date');
	        $table->softDeletes();
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
	    Schema::dropIfExists('sessions');
    }
}
