<?php
namespace Admin;

class StoresController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /admin/store
	 *
	 * @return Response
	 */
	public function index()
	{
    // get all the stores
    $stores = \Store::get();

    // load the view and pass the stores
    return \View::make('admin/Stores/index')
      ->with('stores', $stores);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /admin/store/create
	 *
	 * @return Response
	 */
  public function create()
  {
    // make a new store
    $store = new \Store;

    return \View::make('admin/Stores/create')
      ->with('store', $store);
  }

	/**
	 * Store a newly created resource inat a color looks like to another person... so just as the article states that there is no way to know that we all see what we call "red" in the s storage.
	 * POST /admin/store
	 *
	 * @return Response
	 */
  public function store()
  {
    // make the new store
    $store = new \Store;

    // set the supplied params
    $store->name           = \Input::get('name');
    $store->shop_number    = \Input::get('shop_number');
    $store->floor          = \Input::get('floor');
    $store->mall_id        = \Input::get('mall_id');

    $store->save();

    return \Redirect::to('admin/stores/' . $store->id);
  }

	/**
	 * Display the specified resource.
	 * GET /admin/store/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
  public function show($id)
  {
    // get the store
    $store = \Store::find($id);

    // show the view and pass the store to it
    return \View::make('admin/Stores/show')
      ->with('store', $store);
  }

	/**
	 * Show the form for editing the specified resource.
	 * GET /admin/store/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
  public function edit($id)
  {
    // get the store
    $store = \Store::find($id);

    // show the view and pass the store to it
    return \View::make('admin/Stores/edit')
      ->with('store', $store);
  }

	/**
	 * Update the specified resource in storage.
	 * PUT /admin/store/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
  public function update($id)
  {
    $store = \Store::find($id);

    $store->name           = \Input::get('name');
    $store->shop_number    = \Input::get('shop_number');
    $store->floor          = \Input::get('floor');
    $store->mall_id        = \Input::get('mall_id');

    $store->save();

    return \Redirect::to('admin/stores/' . $store->id);
  }

	/**
	 * Remove the specified resource from storage.
	 * DELETE /admin/store/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
    // get the store
    $store = \Store::find($id);

    // delete it
    $store->delete();

    // go back to the list of stores
    return \Redirect::to('admin/stores');
	}

}