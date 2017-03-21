<?php 

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

/**
 * Api Controller class
 */
class ApiController extends Controller
{

	public function register(Request $request)
	{
		$name = $request->name;
		$email = $request->email;
		$password = $request->password;
		
		if ($name == NULL) {
			$res['success'] = false;
			$res['message'] = 'Please input name.';
			
			return response($res);
		}else if ($email == NULL){
			$res['success'] = false;
			$res['message'] = 'Please input email';
			
			return response($res);
		}else if ($password == NULL){
			$res['success'] = false;
			$res['message'] = 'Please input password';
			
			return response($res);
		}

		$user = User::where('email', $email)->first();
		if ($user) {
			$res['success'] = false;
			$res['message'] = 'User with email '.$email.' allready registered.';
			
			return response($res);
		}
		
		$user = new User;
		$user->name = $name;
		$user->email = $email;
		$user->password = bcrypt($password);

		if ($user->save()) {
			$res['success'] = true;
			$res['message'] = 'Success register.';
			$res['data'] = $user;
			
			return response($res);
		}

	}

	public function login(Request $request)
	{
		$email = $request->email;
		$password = $request->password;

		if ($email == NULL) {
			$res['success'] = false;
			$res['message'] = 'Please input your email address.';
			
			return response($res);
		}else if ($password == NULL){
			$res['success'] = false;
			$res['message'] = 'Please input your password';
			
			return response($res);
		}

		$user = User::where('email',$email)->first();
		if ($user) {
			$password_hash = $user->password;
			if (!\Hash::check($password, $password_hash)) {
				$res['success'] = false;
				$res['message'] = 'Your password is incorrect';
				
				return response($res);
			}

			$token = md5(time());
			$user->remember_token = $token;
			$user->save();

			$res['success'] = true;
			$res['message'] = 'Succes login';
			$res['token'] = $token;
			$res['data'] = $user;

			
			return response($res);
		}else{
			$res['success'] = false;
			$res['message'] = 'Your email is not registered yet please register first';
			
			return response($res);
		}
	}

	public function user(Request $request)
	{
		
	}

	public function product_get_all(Request $request)
	{
		
	}

	public function product_by_id(Request $request, $id)
	{
		
	}

	public function product_new(Request $request)
	{
		
	}

	public function product_edit(Request $request, $id)
	{
		
	}

	public function product_delete(Request $request)
	{
		
	}

}