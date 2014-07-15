<?php
namespace Admin;

class BrandsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /admin/brand
	 *
	 * @return Response
	 */
	public function index()
	{
    // get all the brands
    $brands = \Brand::get();

    // load the view and pass the brands
    return \View::make('admin/Brands/index')
      ->with('brands', $brands);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /admin/brand/create
	 *
	 * @return Response
	 */
	public function create()
	{
    // make a new brand
    $brand = new \Brand;

    return \View::make('admin/Brands/create')
      ->with('brand', $brand);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /admin/brand
	 *
	 * @return Response
	 */
	public function store()
	{
    // make the new mall
    $brand = new \Brand;

    // set the supplied params
    $brand->name           = \Input::get('name');
    $brand->url            = \Input::get('url');

    if(\Input::file('logo'))
      $brand->logo         = \Input::file('logo');

    $brand->save();

    return \Redirect::to('admin/brands/' . $brand->id);
	}

	/**
	 * Display the specified resource.
	 * GET /admin/brand/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
    // get the brand
    $brand = \Brand::find($id);

    // show the view and pass the brand to it
    return \View::make('admin/Brands/show')
      ->with('brand', $brand);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /admin/brand/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
    // get the brand
    $brand = \Brand::find($id);

    // show the view and pass the brand to it
    return \View::make('admin/Brands/edit')
      ->with('brand', $brand);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /admin/brand/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
    // make the new brand
    $brand = \Brand::find($id);

    // set the supplied params
    $brand->name           = \Input::get('name');
    $brand->url            = \Input::get('url');

    if(\Input::file('logo'))
      $brand->logo         = \Input::file('logo');

    $brand->save();

    return \Redirect::to('admin/brands/' . $brand->id);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /admin/brand/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
    // get the brand
    $brand = \Brand::find($id);

    // delete it
    $brand->delete();

    // go back to the list of brands
    return \Redirect::to('admin/brands');
	}

}