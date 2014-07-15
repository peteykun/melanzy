<fieldset>
  <div class="pure-control-group">
    {{ Form::label('id', '#') }}
    {{ Form::text('id', null, array('class' => 'pure-input-2-3', 'disabled' => true)) }}
  </div>

  <div class="pure-control-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', null, array('class' => 'pure-input-2-3')) }}
  </div>

  <div class="pure-control-group">
    {{ Form::label('logo', 'Logo') }}
    {{ Form::file('logo', null, array('class' => 'pure-input-2-3')) }}
  </div>

  <div class="pure-control-group">
    {{ Form::label('url', 'Site URL') }}
    {{ Form::text('url', null, array('class' => 'pure-input-2-3')) }}
  </div>

  <div class="pure-controls center">
    <button type="submit" class="pure-button button-success">Save {{ $brand->name }}</button>
  </div>
</fieldset>