<fieldset>
  <div class="pure-control-group">
    {{ Form::label('id', '#') }}
    {{ Form::text('id', null, array('class' => 'pure-input-2-3', 'disabled' => true)) }}
  </div>

  <div class="pure-control-group">
    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description', null, array('class' => 'pure-input-2-3')) }}
  </div>

  <div class="pure-control-group">
    {{ Form::label('start_time', 'Start Time') }}
    {{ Form::input('datetime-local', 'start_time', $start_time, array('class' => 'pure-input-2-3')) }}
  </div>

  <div class="pure-control-group">
    {{ Form::label('end_time', 'End Time') }}
    {{ Form::input('datetime-local', 'end_time', $end_time, array('class' => 'pure-input-2-3')) }}
  </div>

  <div class="pure-control-group">
    {{ Form::label('store_id', 'Store') }}
    {{ Form::select('store_id', Store::lists('name', 'id'), null, array('class' => 'pure-input-2-3')) }}
  </div>

  <div class="pure-controls center">
    <button type="submit" class="pure-button button-success">Save {{ $deal->name }}</button>
  </div>
</fieldset>