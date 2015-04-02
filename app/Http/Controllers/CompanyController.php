<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Company;
use App\Province;
use App\District;
use App\Ward;

class CompanyController extends Controller {

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
		$province = new Province();
		$district = new District();
		$ward = new Ward();
		
		$provinces = $province->_getAll();
		$districts = $district->_getByProvince('01');
		$wards =   $ward->_getByDistrict('001');
		return view('company.index', compact('provinces'));
	}

	public function profile($id)
	{
		$company = new Company();
		$province = new Province();
		
		$object = $company->_getById($id);
		$provinces = $province->_getAll();
		
		return view('company.profile', compact('object', 'provinces'));
	}

	public function postSave(Request $request)
	{
		$data = $request->all();
		$company = new Company();
		
		if (empty($data['id'])) {
			$company = new Company();
		} else {
			$company= $company->_getById($data["id"]);
		}
		
		$company->code = $data["code"];
		$company->slug = $data["slug"];
		$company->name = $data["name"];
		$company->description = $data["description"];
		$company->short_description = $data["short_description"];
		$company->email = $data["email"];
		$company->phone = $data["phone"];
		$company->fax = $data["fax"];
		$company->tax_id = $data["tax_id"];
		$company->website = $data["website"];
		$company->address1 = $data["address1"];
		$company->address2 = $data["address2"];
		$company->ward_id = $data["ward_id"];
		$company->district_id = $data["district_id"];
		$company->province_id = $data["province_id"];
		$company->state = $data["state"];
		$company->zipcode = $data["zipcode"];
		$company->country_id = $data["country_id"];
		$company->status = !empty($data["status"]) ? $data["status"]: 0;
		$company->picture = !empty($data["picture"]) ? $data["picture"] : '';
		$company->cover = !empty($data["cover"]) ? $data["cover"] : '';
		$company->type = $data["type"];
        $company->_save();
        
        if ($data["submit_save"] == "1") {
        	return redirect('/company/profile/' . $company->id);
        } else {
        	return redirect('/company');
        }
	}
}
