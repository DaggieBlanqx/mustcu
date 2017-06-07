<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('course_reg_no');
            $table->integer('init_yearsem')->unsiged();
	        $table->integer('prev_yearsem')->unsiged()->nullable();
            $table->integer('curr_yearsem')->unsiged();
            $table->softDeletes();
            $table->timestamps();
	        /*
	         * Only single reg no per account.
	         */
	        $table->unique('course_reg_no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
