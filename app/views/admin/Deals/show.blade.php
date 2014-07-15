@extends('layouts.admin')

@section('title', 'Deals')
@section('subtitle', 'Showing ' . $deal->store->name . '\'s deal')

@section('content')
  <div class="pure-g">
    <div class="pure-u-1-3 field-name">
      <p>#</p>
    </div>
    <div class="pure-u-2-3 field-value">
      <p>{{ $deal->id }}</p>
    </div>

    <div class="pure-u-1-3 field-name">
      <p>Description</p>
    </div>
    <div class="pure-u-2-3 field-value">
      <p>{{ $deal->description }}</p>
    </div>

    <div class="pure-u-1-3 field-name">
      <p>Start Time</p>
    </div>
    <div class="pure-u-2-3 field-value">
      <p>{{ $deal->start_time }}</p>
    </div>

    <div class="pure-u-1-3 field-name">
      <p>End Time</p>
    </div>
    <div class="pure-u-2-3 field-value">
      <p>{{ $deal->end_time }}</p>
    </div>

    <div class="pure-u-1-3 field-name">
      <p>Store</p>
    </div>
    <div class="pure-u-2-3 field-value">
      <p><a href="{{ URL::to('admin/stores/' . $deal->store->id) }}">{{ $deal->store->name }}</a></p>
    </div>
  </div>

  <div class="navi-buttons">
    <a class="pure-button pure-button-primary" href="{{ URL::to('admin/deals/') }}">All deals</a>
    <a class="pure-button button-secondary" href="{{ URL::to('admin/deals/' . $deal->id . '/edit') }}">Edit this deal</a>
  </div>
        
@stop