<?php 

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

/**
 * Admin Controller class
 */
class AdminController extends Controller
{
	
	public function dashboard(Request $request)
	{
		$chart = \App\Http\Controllers\Helper\Dashboard::chart();
		return view('admin.dashboard', compact('chart'));
	}

	public function user(Request $request)
	{
		$user = User::paginate(10);

		return view('admin.users', compact('user'));
	}
}