<?php 

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

/**
* 
*/
class ProductController extends controller
{
	
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function product()
	{
		$product = Product::paginate(10);

		return view('admin.product', compact('product'));
	}

	public function new(Request $request)
	{
		return view('admin.product_new');
	}
}