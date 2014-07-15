@extends('layouts.admin')

@section('title', 'Deals')
@section('subtitle', 'Listing all deals')

@section('content')
  <table class="pure-table">
    <thead>
      <tr>
        <th>#</th>
        <th>Description</th>
        <th></th>
      </tr>
    </thead>

    <tbody>
      @foreach ($deals as $deal)
      <tr>
        <td>{{ $deal->id }}</td>
        <td>{{ $deal->description }}</td>
        <td class="no-stretch">
          <a class="pure-button pure-button-primary" href="{{ URL::to('admin/deals/' . $deal->id) }}">Show</a>
          <a class="pure-button button-secondary" href="{{ URL::to('admin/deals/' . $deal->id . '/edit') }}">Edit</a>

          {{ Form::open(array('url' => 'admin/deals/' . $deal->id, 'style' => 'display: inline-block;')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' => 'pure-button button-error', 'onclick' => 'return confirm("Are you sure?")')) }}
          {{ Form::close() }}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <div class="navi-buttons">
    <a class="pure-button button-success" href="{{ URL::to('admin/deals/create') }}">New deal</a>
  </div>
@stop