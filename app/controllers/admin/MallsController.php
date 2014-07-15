<?php
namespace Admin;

class MallsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /admin/mall
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the malls
    $malls = \Mall::get();

    // load the view and pass the malls
    return \View::make('admin/Malls/index')
      ->with('malls', $malls);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /admin/mall/create
	 *
	 * @return Response
	 */
	public function create()
	{
		// make a new mall
    $mall = new \Mall;

    return \View::make('admin/Malls/create')
      ->with('mall', $mall);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /admin/mall
	 *
	 * @return Response
	 */
	public function store()
	{
    // make the new mall
    $mall = new \Mall;

    // set the supplied params
    $mall->name           = \Input::get('name');
    $mall->address_line1  = \Input::get('address_line1');
    $mall->address_line2  = \Input::get('address_line2');
    $mall->address_city   = \Input::get('address_city');
    $mall->address_state  = \Input::get('address_state');
    $mall->address_pin    = \Input::get('address_pin');
    $mall->latitude       = \Input::get('latitude');
    $mall->longitude      = \Input::get('longitude');
    $mall->url            = \Input::get('url');

    if(\Input::file('logo'))
      $mall->logo         = \Input::file('logo');

    $mall->save();

    return \Redirect::to('admin/malls/' . $mall->id);
	}

	/**
	 * Display the specified resource.
	 * GET /admin/mall/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the mall
    $mall = \Mall::find($id);

    // show the view and pass the mall to it
    return \View::make('admin/Malls/show')
      ->with('mall', $mall);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /admin/mall/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
    // get the mall
    $mall = \Mall::find($id);

    // show the view and pass the mall to it
    return \View::make('admin/Malls/edit')
      ->with('mall', $mall);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /admin/mall/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$mall = \Mall::find($id);

    $mall->name           = \Input::get('name');
    $mall->address_line1  = \Input::get('address_line1');
    $mall->address_line2  = \Input::get('address_line2');
    $mall->address_city   = \Input::get('address_city');
    $mall->address_state  = \Input::get('address_state');
    $mall->address_pin    = \Input::get('address_pin');
    $mall->latitude       = \Input::get('latitude');
    $mall->longitude      = \Input::get('longitude');
    $mall->url            = \Input::get('url');

    if(\Input::file('logo'))
      $mall->logo         = \Input::file('logo');

    $mall->save();

    return \Redirect::to('admin/malls/' . $mall->id);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /admin/mall/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
    // get the mall
    $mall = \Mall::find($id);

    // delete it
    $mall->delete();

    // go back to the list of malls
    return \Redirect::to('admin/malls');
	}

}