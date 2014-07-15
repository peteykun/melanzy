@extends('layouts.admin')

@section('title', 'Brands')
@section('subtitle', 'Listing all brands')

@section('content')
  <table class="pure-table">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th></th>
      </tr>
    </thead>

    <tbody>
      @foreach ($brands as $brand)
      <tr>
        <td>{{ $brand->id }}</td>
        <td>{{ $brand->name }}</td>
        <td class="no-stretch">
          <a class="pure-button pure-button-primary" href="{{ URL::to('admin/brands/' . $brand->id) }}">Show</a>
          <a class="pure-button button-secondary" href="{{ URL::to('admin/brands/' . $brand->id . '/edit') }}">Edit</a>

          {{ Form::open(array('url' => 'admin/brands/' . $brand->id, 'style' => 'display: inline-block;')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' => 'pure-button button-error', 'onclick' => 'return confirm("Are you sure?")')) }}
          {{ Form::close() }}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <div class="navi-buttons">
    <a class="pure-button button-success" href="{{ URL::to('admin/brands/create') }}">New brand</a>
  </div>
@stop