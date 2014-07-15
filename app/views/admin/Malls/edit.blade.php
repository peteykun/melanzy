@extends('layouts.admin')

@section('title', 'Malls')
@section('subtitle', 'Editing <b>' . $mall->name . '</b>')

@section('content')
  {{ Form::model($mall, array(
    'route'   => array('admin.malls.update', $mall->id),
    'method'  => 'PUT',
    'class'   => 'pure-form pure-form-aligned',
    'files'   => true
  )) }}

    @include('admin.Malls._form')

  {{ Form::close() }}

  <div class="navi-buttons">
    <a class="pure-button pure-button-primary" href="{{ URL::to('admin/malls/') }}">All malls</a>
    <a class="pure-button button-secondary" href="{{ URL::to('admin/malls/' . $mall->id) }}">View {{ $mall->name }}</a>
  </div>
        
@stop