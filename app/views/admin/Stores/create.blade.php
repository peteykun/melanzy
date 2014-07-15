@extends('layouts.admin')

@section('title', 'Stores')
@section('subtitle', 'Creating new store')

@section('content')
  {{ Form::model($store, array(
    'route'   => array('admin.stores.index'),
    'method'  => 'POST',
    'class'   => 'pure-form pure-form-aligned',
    'files'   => true
  )) }}

    @include('admin.Stores._form')

  {{ Form::close() }}

  <div class="navi-buttons">
    <a class="pure-button pure-button-primary" href="{{ URL::to('admin/stores/') }}">All stores</a>
  </div>
        
@stop