@extends('layouts.admin')

@section('title', 'Stores')
@section('subtitle', 'Editing <b>' . $store->name . '</b>')

@section('content')
  {{ Form::model($store, array(
    'route'   => array('admin.stores.update', $store->id),
    'method'  => 'PUT',
    'class'   => 'pure-form pure-form-aligned',
    'files'   => true
  )) }}

    @include('admin.Stores._form')

  {{ Form::close() }}

  <div class="navi-buttons">
    <a class="pure-button pure-button-primary" href="{{ URL::to('admin/stores/') }}">All stores</a>
    <a class="pure-button button-secondary" href="{{ URL::to('admin/stores/' . $store->id) }}">View {{ $store->name }}</a>
  </div>
        
@stop