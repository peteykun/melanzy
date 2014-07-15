@extends('layouts.admin')

@section('title', 'Malls')
@section('subtitle', 'Creating new mall')

@section('content')
  {{ Form::model($mall, array(
    'route'   => array('admin.malls.index'),
    'method'  => 'POST',
    'class'   => 'pure-form pure-form-aligned',
    'files'   => true
  )) }}

    @include('admin.Malls._form')

  {{ Form::close() }}

  <div class="navi-buttons">
    <a class="pure-button pure-button-primary" href="{{ URL::to('admin/malls/') }}">All malls</a>
  </div>
        
@stop