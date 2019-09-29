<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\UserRegistration;
use Session;

class UserController extends Controller
{
	public function index() {
		return view('front.login');
	}

	public function register() {
		return view('front.register');
	}


	public function userRegistration(Request $request)
	{
		$request->validate([
			'full_name'=>'required',
			'email'=>'required|email|unique:user_registrations',
			'password'=>'required|min:5',
			'confirm_password'=>'required|min:5',
			'phone_number'=>'required|regex:/(01)[0-9]{9}/|min:11|max:11'
		]);

		$user_registration = new UserRegistration;
		$user_registration->full_name = $request->full_name;
		$user_registration->email = $request->email;
		$user_registration->password = Hash::make($request->password);
		$user_registration->confirm_password = Hash::make($request->confirm_password);
		$user_registration->phone_number = $request->phone_number;
		if($request->password == $request->confirm_password){
			$user_registration->save();
			return redirect('/user-login')->with('message','Registration Successfully');
		}else{
			return redirect()->back()->with('message','password not Match');
		}
	}

	public function userLogin(Request $request)
	{
		$request->validate([
            'email'=>'required',
            'password'=>'required|min:5'
		]);

		$email = $request->email;
		$password = $request->password;
	    $cheekEmail = UserRegistration::where('email',$email)->first();
	    if($cheekEmail){
	    	$password1 = $cheekEmail->password;
	    	if(password_verify($password,$password1)){
	    		Session::put('full_name', $cheekEmail->full_name);
	    		Session::put('id',$cheekEmail->id);
	    		Session::put('email',$cheekEmail->email);
	    		Session::flash('success','Login Successfully! Now You Can Cheekout Product,!add to favourite product in your wishlist');
	    		return redirect('/');

	    	}else{
	    		return redirect()->back()->with('message','Password not Match');
	    	}

	    }else{
	    	return redirect()->back()->with('message','Email not Match');
	    }
	}

	public function userLogOut()
	{
		Session::flush();
		Session::flash('success','Logout Successfully ');
		return redirect('user-login');
		Cart::destroy();
	}
}
