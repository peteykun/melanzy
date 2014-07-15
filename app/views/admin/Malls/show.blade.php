@extends('layouts.admin')

@section('title', 'Malls')
@section('subtitle', 'Showing <b>' . $mall->name . '</b>')

@section('content')
  <div class="pure-g">
    <div class="pure-u-1-3 field-name">
      <p>#</p>
    </div>
    <div class="pure-u-2-3 field-value">
      <p>{{ $mall->id }}</p>
    </div>

    <div class="pure-u-1-3 field-name">
      <p>Name</p>
    </div>
    <div class="pure-u-2-3 field-value">
      <p>{{ $mall->name }}</p>
    </div>

    <div class="pure-u-1-3 field-name">
      <p>Logo</p>
    </div>
    <div class="pure-u-2-3 field-value">
      <img class="pure-img" src="{{ $mall->logo->url('medium') }}"></img>
    </div>

    <div class="pure-u-1-3 field-name">
      <p>Address</p>
    </div>
    <div class="pure-u-2-3 field-value">
      <p>
        {{ $mall->address_line1 }}<br>
        {{ $mall->address_line2 }}<br>
        {{ $mall->address_city }} {{ $mall->address_pin }}<br>
        {{ $mall->address_state }}
      </p>
    </div>

    <div class="pure-u-1-3 field-name">
      <p>Coordinates</p>
    </div>
    <div class="pure-u-2-3 field-value">
      <a href="http://maps.google.com/?q={{ $mall->latitude }},{{ $mall->longitude }}" target="_blank"><img class="pure-img" src="http://maps.google.com/maps/api/staticmap?center={{ $mall->latitude }},{{ $mall->longitude }}&amp;zoom=16&amp;size=300x300&amp;maptype=roadmap&amp;sensor=false"></a>
    </div>

    <div class="pure-u-1-3 field-name">
      <p>Site URL</p>
    </div>
    <div class="pure-u-2-3 field-value">
      <p><a href="{{ $mall->url }}" target="_blank">{{ $mall->url }}</a></p>
    </div>
  </div>

  <div class="navi-buttons">
    <a class="pure-button pure-button-primary" href="{{ URL::to('admin/malls/') }}">All malls</a>
    <a class="pure-button button-secondary" href="{{ URL::to('admin/malls/' . $mall->id . '/edit') }}">Edit {{ $mall->name }}</a>
  </div>
        
@stop