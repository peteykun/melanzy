@extends('layouts.admin')

@section('title', 'Brands')
@section('subtitle', 'Creating new brand')

@section('content')
  {{ Form::model($brand, array(
    'route'   => array('admin.brands.index'),
    'method'  => 'POST',
    'class'   => 'pure-form pure-form-aligned',
    'files'   => true
  )) }}

    @include('admin.Brands._form')

  {{ Form::close() }}

  <div class="navi-buttons">
    <a class="pure-button pure-button-primary" href="{{ URL::to('admin/brands/') }}">All brands</a>
  </div>
        
@stop