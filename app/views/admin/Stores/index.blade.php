@extends('layouts.admin')

@section('title', 'Stores')
@section('subtitle', 'Listing all stores')

@section('content')
  <table class="pure-table">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Mall</th>
        <th></th>
      </tr>
    </thead>

    <tbody>
      @foreach ($stores as $store)
      <tr>
        <td>{{ $store->id }}</td>
        <td>{{ $store->name }}</td>
        <td>{{ $store->mall->name }}</td>
        <td class="no-stretch">
          <a class="pure-button pure-button-primary" href="{{ URL::to('admin/stores/' . $store->id) }}">Show</a>
          <a class="pure-button button-secondary" href="{{ URL::to('admin/stores/' . $store->id . '/edit') }}">Edit</a>

          {{ Form::open(array('url' => 'admin/stores/' . $store->id, 'style' => 'display: inline-block;')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' => 'pure-button button-error', 'onclick' => 'return confirm("Are you sure?")')) }}
          {{ Form::close() }}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <div class="navi-buttons">
    <a class="pure-button button-success" href="{{ URL::to('admin/stores/create') }}">New store</a>
  </div>
@stop