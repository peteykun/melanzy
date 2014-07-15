@extends('layouts.admin')

@section('title', 'Deals')
@section('subtitle', 'Editing <b>' . $deal->name . '</b>')

@section('content')
  {{ Form::model($deal, array(
    'route'   => array('admin.deals.update', $deal->id),
    'method'  => 'PUT',
    'class'   => 'pure-form pure-form-aligned',
    'files'   => true
  )) }}

    @include('admin.Deals._form')

  {{ Form::close() }}

  <div class="navi-buttons">
    <a class="pure-button pure-button-primary" href="{{ URL::to('admin/deals/') }}">All deals</a>
    <a class="pure-button button-secondary" href="{{ URL::to('admin/deals/' . $deal->id) }}">View {{ $deal->name }}</a>
  </div>
        
@stop