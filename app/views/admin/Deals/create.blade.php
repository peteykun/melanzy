@extends('layouts.admin')

@section('title', 'Deals')
@section('subtitle', 'Creating new deal')

@section('content')
  {{ Form::model($deal, array(
    'route'   => array('admin.deals.index'),
    'method'  => 'POST',
    'class'   => 'pure-form pure-form-aligned',
    'files'   => true
  )) }}

    @include('admin.Deals._form')

  {{ Form::close() }}

  <div class="navi-buttons">
    <a class="pure-button pure-button-primary" href="{{ URL::to('admin/deals/') }}">All deals</a>
  </div>
        
@stop