<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Mail;
use App\Mail\EmailVerification;
use App\Jobs\SendVerificationEmail;

class UserController extends Controller
{

	public function __construct() {
		$this->user = new User();
	}

	/*
	 * Confirm user Account by Token
	 */
	public function confirmAccount($token , Request $request)
	{
		$confrimed =$this->user->where('confirmation_code', $token)->first();
		if($confrimed){
			$request->session()->flash('success', 'Verfication Token Expired.!');
			$this->user->where('confirmation_code', $token)->update(['confirmed' => 1,'confirmation_code' => '']);
			if (Auth::attempt(['email' => $confrimed->email, 'password' => $confrimed->firstpassword])) {
				$request->session()->flash('success', 'Account Confirmed Please Continue to Complete nformation.!');
			}else{
				$request->session()->flash('error', 'Account Login Error Please Login Again.!');
			}
		}else{
			$request->session()->flash('success', 'Verfication Token Expired.!');
		}
		return redirect(route('member'));
	}

	/*
	 * Send Email Verfication
	*/
	public function sendMail(){
		$email = new EmailVerification(Auth::user());
		Mail::to(Auth::user()->email)->send($email);
		return redirect(route('member'));

	}





}
