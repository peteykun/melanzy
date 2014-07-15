@extends('layouts.admin')

@section('title', 'Stores')
@section('subtitle', 'Showing <b>' . $store->name . '</b>')

@section('content')
  <div class="pure-g">
    <div class="pure-u-1-3 field-name">
      <p>#</p>
    </div>
    <div class="pure-u-2-3 field-value">
      <p>{{ $store->id }}</p>
    </div>

    <div class="pure-u-1-3 field-name">
      <p>Name</p>
    </div>
    <div class="pure-u-2-3 field-value">
      <p>{{ $store->name }}</p>
    </div>

    <div class="pure-u-1-3 field-name">
      <p>Shop Number</p>
    </div>
    <div class="pure-u-2-3 field-value">
      <p>{{ $store->shop_number }}</p>
    </div>

    <div class="pure-u-1-3 field-name">
      <p>Floor</p>
    </div>
    <div class="pure-u-2-3 field-value">
      <p>{{ $store->floor }}</p>
    </div>

    <div class="pure-u-1-3 field-name">
      <p>Mall</p>
    </div>
    <div class="pure-u-2-3 field-value">
      <p><a href="{{ URL::to('admin/malls/' . $store->mall->id) }}">{{ $store->mall->name }}</a></p>
    </div>
  </div>

  <div class="navi-buttons">
    <a class="pure-button pure-button-primary" href="{{ URL::to('admin/stores/') }}">All stores</a>
    <a class="pure-button button-secondary" href="{{ URL::to('admin/stores/' . $store->id . '/edit') }}">Edit {{ $store->name }}</a>
  </div>
        
@stop