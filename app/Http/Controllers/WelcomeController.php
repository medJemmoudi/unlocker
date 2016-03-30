<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Lang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Transaction;
use App\Langue;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

	public function addUnlock()
	{
		if(Input::has('imei') && Input::has('email') && !is_null(Input::get('imei')))
		{
			$transaction = new Transaction();

			$imei = Input::get('imei');
			$email = Input::get('email');

			$lang = Langue::where('cc',Lang::getLocale())->first();

			$transaction->imei = $imei;
			$transaction->email = $email;
			$transaction->payment = false;
			$transaction->status = 'fw2';
			$transaction->lang = $lang->id;
			
			$transaction->save();

		}
	}

}
