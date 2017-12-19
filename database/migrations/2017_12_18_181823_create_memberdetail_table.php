<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberdetail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('type');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('school_name')->nullable();
            $table->string('school_email')->nullable();
            $table->string('phone')->nullable();
            $table->string('work_email')->nullable();
            $table->string('gender');
	        $table->string('education_level')->nullable();
	        $table->string('post_secondary_institution')->nullable();
	        $table->string('areaofacadmic');
            $table->string('age');
            $table->string('sectorofemployment')->nullable();
	        $table->string('areaofexperience')->nullable();
	        $table->string('yearsofexperience')->nullable();
	        $table->string('mentoring_relationship')->nullable();
	        $table->string('p1_name')->nullable();
	        $table->string('p1_relation')->nullable();
	        $table->string('p1_phone')->nullable();
	        $table->string('p1_email')->nullable();
	        $table->string('p2_name')->nullable();
	        $table->string('p2_relation')->nullable();
	        $table->string('p2_phone')->nullable();
	        $table->string('p2_email')->nullable();
	        $table->string('permission')->nullable();
	        $table->string('whyyouapply');
            $table->string('alreadypart');
            $table->string('experiences');
            $table->string('biggest_challenge')->nullable();;
            $table->string('comunication');
            $table->string('about');
            $table->string('disability');
            $table->string('samegender');
            $table->string('sameeducational');
            $table->string('samedisability');
            $table->string('noprference')->nullable();;
            $table->string('deceleration1');
            $table->string('deceleration2');
            $table->string('deceleration3');
            $table->string('deceleration4');
            $table->string('deceleration5');
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
        Schema::dropIfExists('memberdetail');
    }
}
