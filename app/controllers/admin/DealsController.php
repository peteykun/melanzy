<?php
namespace Admin;

use Carbon\Carbon;

class DealsController extends \BaseController {

  /**
   * Display a listing of the resource.
   * GET /admin/deal
   *
   * @return Response
   */
  public function index()
  {
    // get all the deals
    $deals = \Deal::get();

    // load the view and pass the deals
    return \View::make('admin/Deals/index')
      ->with('deals', $deals);
  }

  /**
   * Show the form for creating a new resource.
   * GET /admin/deal/create
   *
   * @return Response
   */
  public function create()
  {
    // make a new deal
    $deal = new \Deal;

    $start_time = Carbon::parse($deal->start_time)->timezone('Asia/Kolkata')->format("Y-m-d\TH:i:s");
    $end_time   = Carbon::parse($deal->end_time)->timezone('Asia/Kolkata')->format("Y-m-d\TH:i:s");

    return \View::make('admin/Deals/create')
      ->with('deal', $deal)
      ->with('start_time', $start_time)
      ->with('end_time', $end_time);
  }

  /**
   * Deal a newly created resource inat a color looks like to another person... so just as the article states that there is no way to know that we all see what we call "red" in the s storage.
   * POST /admin/deal
   *
   * @return Response
   */
  public function store()
  {
    // make the new deal
    $deal = new \Deal;

    // set the supplied params
    $deal->description    = \Input::get('description');
    $deal->start_time     = \Input::get('start_time');
    $deal->end_time       = \Input::get('end_time');
    $deal->store_id       = \Input::get('store_id');

    $deal->save();

    return \Redirect::to('admin/deals/' . $deal->id);
  }

  /**
   * Display the specified resource.
   * GET /admin/deal/{id}
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    // get the deal
    $deal = \Deal::find($id);

    // show the view and pass the deal to it
    return \View::make('admin/Deals/show')
      ->with('deal', $deal);
  }

  /**
   * Show the form for editing the specified resource.
   * GET /admin/deal/{id}/edit
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    // get the deal
    $deal = \Deal::find($id);

    $start_time = Carbon::parse($deal->start_time)->format("Y-m-d\TH:i:s");
    $end_time   = Carbon::parse($deal->end_time)->format("Y-m-d\TH:i:s");

    // show the view and pass the deal to it
    return \View::make('admin/Deals/edit')
      ->with('deal', $deal)
      ->with('start_time', $start_time)
      ->with('end_time', $end_time);
  }

  /**
   * Update the specified resource in storage.
   * PUT /admin/deal/{id}
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    $deal = \Deal::find($id);

    $deal->description    = \Input::get('description');
    $deal->start_time     = \Input::get('start_time');
    $deal->end_time       = \Input::get('end_time');
    $deal->store_id       = \Input::get('store_id');

    $deal->save();

    return \Redirect::to('admin/deals/' . $deal->id);
  }

  /**
   * Remove the specified resource from storage.
   * DELETE /admin/deal/{id}
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    // get the deal
    $deal = \Deal::find($id);

    // delete it
    $deal->delete();

    // go back to the list of deals
    return \Redirect::to('admin/deals');
  }

}