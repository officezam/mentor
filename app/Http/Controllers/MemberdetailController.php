<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Memberdetail;
use Illuminate\Auth;

class MemberdetailController extends Controller
{

    public function __construct()
    {
    	$this->memberdetail = new Memberdetail();
    }

	/*
	 * Save Member Detail */
	public function store(Request $request)
	{
//		dd($request);
		$memberdetail =$this->memberdetail->create([
			'user_id'   => \Auth::user()->id,
			'first_name' => $request->first_name,
			'middle_name' => $request->middle_name,
			'last_name' => $request->last_name,
			'school_name' => $request->school_name,
			'school_email' => $request->school_email,
			'gender' => implode('_', $request->gender),
			'type' => $request->type,
			'age' => $request->age,
			'areaofacadmic' => $request->areaofacadmic,
			'sectorofemployment' => $request->sectorofemployment,
			'whyyouapply' => $request->whyyouapply,
			'alreadypart' => $request->experiences,
			'experiences' =>  $request->experiences,
			'biggest_challenge' => $request->biggest_challenge,
			'comunication' => $request->comunication,
			'disability' => implode('_', $request->disability),
			'samegender' => $request->samegender,
			'sameeducational' => $request->sameeducational,
			'samedisability' => $request->samedisability,
			'noprference' => $request->noprference,
			'deceleration1' => $request->deceleration1,
			'deceleration2' => $request->deceleration2,
			'deceleration3' => $request->deceleration3,
			'deceleration4' => $request->deceleration4,
			'deceleration5' => $request->deceleration5,
			'about' => $request->about,
		]);
		return view('home');
	}


	public function becomamentorsave(Request $request)
	{
		$memberdetail =$this->memberdetail->create([
			'user_id'   => \Auth::user()->id,
			'type' => $request->type,
			'first_name' => $request->first_name,
			'middle_name' => $request->middle_name,
			'last_name' => $request->last_name,
			'phone' => $request->phone,
			'work_email' => $request->work_email,
			'gender' => implode('_', $request->gender),
			'age' => $request->age,
			'education_level' => $request->education_level,
			'post_secondary_institution' => $request->post_secondary_institution,
			'areaofacadmic' => $request->areaofacadmic,
			'areaofexperience' => $request->areaofexperience,
			'yearsofexperience' => $request->yearsofexperience,
			'whyyouapply' => $request->whyyouapply,
			'alreadypart' => $request->alreadypart,
			'experiences' =>  $request->experiences,
			'mentoring_relationship' =>  $request->mentoring_relationship,
			'comunication' => $request->comunication,
			'about' => $request->about,
			'permission' => $request->permission,
			'disability' => implode('_', $request->disability),
			'samegender' => $request->samegender,
			'sameeducational' => $request->sameeducational,
			'samedisability' => $request->samedisability,
			'p1_name' => $request->p1_name,
			'p1_relation' => $request->p1_relation,
			'p1_phone' => $request->p1_phone,
			'p1_email' => $request->p1_email,
			'p2_name' => $request->p2_name,
			'p2_relation' => $request->p2_relation,
			'p2_phone' => $request->p2_phone,
			'p2_email' => $request->p2_email,
			'deceleration1' => $request->deceleration1,
			'deceleration2' => $request->deceleration2,
			'deceleration3' => $request->deceleration3,
			'deceleration4' => $request->deceleration4,
			'deceleration5' => $request->deceleration5
		]);

		return view('home');

	}


}
