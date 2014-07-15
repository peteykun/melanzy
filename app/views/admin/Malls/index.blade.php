@extends('layouts.admin')

@section('title', 'Malls')
@section('subtitle', 'Listing all malls')

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
      @foreach ($malls as $mall)
      <tr>
        <td>{{ $mall->id }}</td>
        <td>{{ $mall->name }}</td>
        <td class="no-stretch">
          <a class="pure-button pure-button-primary" href="{{ URL::to('admin/malls/' . $mall->id) }}">Show</a>
          <a class="pure-button button-secondary" href="{{ URL::to('admin/malls/' . $mall->id . '/edit') }}">Edit</a>

          {{ Form::open(array('url' => 'admin/malls/' . $mall->id, 'style' => 'display: inline-block;')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' => 'pure-button button-error', 'onclick' => 'return confirm("Are you sure?")')) }}
          {{ Form::close() }}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <div class="navi-buttons">
    <a class="pure-button button-success" href="{{ URL::to('admin/malls/create') }}">New mall</a>
  </div>
@stop