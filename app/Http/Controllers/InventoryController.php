<?php namespace App\Http\Controllers;

class InventoryController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('inventory.index');
	}

	public function products()
	{
		return view('inventory.products');
	}
	
	public function stock_report_summaries()
	{
		return view('inventory.stock_report_summaries');
	}
	
	public function stock_report_details()
	{
		return view('inventory.stock_report_details');
	}
	
}
