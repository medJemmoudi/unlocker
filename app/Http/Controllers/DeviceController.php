<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Device;

	/**
	 * @Resource("admin/devices")
	 * @Middleware("auth")
	*/

class DeviceController extends Controller {

	public function index()
	{
		$devices = Device::all();
		return view('admin.devices', compact('devices',$devices));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$device = new Device();
		$nom = Input::get('device');
		$device->device = $nom;
		$device->save();
		
		Session::flash('done', true);
		return Redirect::back();
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Request $request)
	{
		$id = $request->segment(3);
		$device = Device::find($id);
		$device->delete();

		Session::flash('delete', true);
		return Redirect::back();
	}

}
