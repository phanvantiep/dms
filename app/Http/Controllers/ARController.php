<?php namespace App\Http\Controllers;

class ARController extends Controller {

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
		return view('ar.index');
	}

	public function customers()
	{
		return view('ar.customers');
	}
	
	public function balance_reports()
	{
		return view('ar.balance_reports');
	}
	
	public function recieve_reports()
	{
		return view('ar.recieve_reports');
	}
}
