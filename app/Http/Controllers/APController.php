<?php namespace App\Http\Controllers;

class APController extends Controller {

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
		return view('ap.index');
	}

	public function vendors()
	{
		return view('ap.vendors');
	}
	
	public function balance_reports()
	{
		return view('ap.balance_reports');
	}
	
	public function payable_reports()
	{
		return view('ap.payable_reports');
	}
}
