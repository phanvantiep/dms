<?php namespace App\Http\Controllers;

class SalesController extends Controller {

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
		return view('sales.index');
	}

	public function print_invoices()
	{
		return view('sales.print_invoices');
	}
	
	public function return_orders()
	{
		return view('sales.return_orders');
	}
	
	public function sales_routes()
	{
		return view('sales.sales_routes');
	}
	
	public function mean_of_tranports()
	{
		return view('sales.mean_of_tranports');
	}
	
	public function salesmans()
	{
		return view('sales.salesmans');
	}
	
	public function invoices()
	{
		return view('sales.invoices');
	}
	
	public function issue_reports()
	{
		return view('sales.issue_reports');
	}
}
