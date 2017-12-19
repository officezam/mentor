<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memberdetail extends Model
{
	protected $table = 'memberdetail';


	protected $fillable = [
		'user_id' ,
		'first_name' ,
		'middle_name',
		'last_name',
		'school_name' ,
		'phone' ,
		'school_email' ,
		'gender',
		'type',
		'age',
		'areaofacadmic' ,
		'sectorofemployment' ,
		'whyyouapply' ,
		'alreadypart' ,
		'experiences' ,
		'biggest_challenge' ,
		'comunication' ,
		'disability' ,
		'samegender' ,
		'sameeducational' ,
		'samedisability',
		'noprference' ,
		'deceleration1',
		'deceleration2',
		'deceleration3',
		'deceleration4' ,
		'deceleration5',
		'about',
		'work_email',
		'education_level',
		'post_secondary_institution',
		'areaofexperience',
		'yearsofexperience',
		'mentoring_relationship',
		'permission' ,
		'p1_name',
		'p1_relation',
		'p1_phone' ,
		'p1_email' ,
		'p2_name' ,
		'p2_relation' ,
		'p2_phone',
		'p2_email',
	];

	public function setTable($table)
	{
		$this->table = $table;
		return $this;
	}
}
