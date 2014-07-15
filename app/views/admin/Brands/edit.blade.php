@extends('layouts.admin')

@section('title', 'Brands')
@section('subtitle', 'Editing <b>' . $brand->name . '</b>')

@section('content')
  {{ Form::model($brand, array(
    'route'   => array('admin.brands.update', $brand->id),
    'method'  => 'PUT',
    'class'   => 'pure-form pure-form-aligned',
    'files'   => true
  )) }}

    @include('admin.Brands._form')

  {{ Form::close() }}

  <div class="navi-buttons">
    <a class="pure-button pure-button-primary" href="{{ URL::to('admin/brands/') }}">All brands</a>
    <a class="pure-button button-secondary" href="{{ URL::to('admin/brands/' . $brand->id) }}">View {{ $brand->name }}</a>
  </div>
        
@stop