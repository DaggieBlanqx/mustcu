<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function(Blueprint $table){
            $table->bigIncrements('id');
	        $table->bigInteger('user_id')->unsigned();
	        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
	        $table->string('full_name', 255);
	        $table->string('phone_number',64);
	        /*
	         * Add some other fields in future.
	         */
	        $table->softDeletes();
	        $table->timestamps();
	        $table->unique('phone_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
