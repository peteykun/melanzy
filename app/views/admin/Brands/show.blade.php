@extends('layouts.admin')

@section('title', 'Brands')
@section('subtitle', 'Showing <b>' . $brand->name . '</b>')

@section('content')
  <div class="pure-g">
    <div class="pure-u-1-3 field-name">
      <p>#</p>
    </div>
    <div class="pure-u-2-3 field-value">
      <p>{{ $brand->id }}</p>
    </div>

    <div class="pure-u-1-3 field-name">
      <p>Name</p>
    </div>
    <div class="pure-u-2-3 field-value">
      <p>{{ $brand->name }}</p>
    </div>

    <div class="pure-u-1-3 field-name">
      <p>Logo</p>
    </div>
    <div class="pure-u-2-3 field-value">
      <img class="pure-img" src="{{ $brand->logo->url('medium') }}"></img>
    </div>

    <div class="pure-u-1-3 field-name">
      <p>Site URL</p>
    </div>
    <div class="pure-u-2-3 field-value">
      <p><a href="{{ $brand->url }}" target="_blank">{{ $brand->url }}</a></p>
    </div>
  </div>

  <div class="navi-buttons">
    <a class="pure-button pure-button-primary" href="{{ URL::to('admin/brands/') }}">All brands</a>
    <a class="pure-button button-secondary" href="{{ URL::to('admin/brands/' . $brand->id . '/edit') }}">Edit {{ $brand->name }}</a>
  </div>
        
@stop