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
    {{ Form::label('address_line1', 'Address Line 1') }}
    {{ Form::text('address_line1', null, array('class' => 'pure-input-2-3')) }}
  </div>

  <div class="pure-control-group">
    {{ Form::label('address_line2', 'Address Line 2') }}
    {{ Form::text('address_line2', null, array('class' => 'pure-input-2-3')) }}
  </div>

  <div class="pure-control-group">
    {{ Form::label('address_city', 'City') }}
    {{ Form::text('address_city', null, array('class' => 'pure-input-2-3')) }}
  </div>

  <div class="pure-control-group">
    {{ Form::label('address_state', 'State') }}
    {{ Form::text('address_state', null, array('class' => 'pure-input-2-3')) }}
  </div>

  <div class="pure-control-group">
    {{ Form::label('address_pin', 'PIN Code') }}
    {{ Form::text('address_pin', null, array('class' => 'pure-input-2-3')) }}
  </div>

  <div class="pure-control-group">
    {{ Form::label('latitude', 'Latitude') }}
    {{ Form::text('latitude', null, array('class' => 'pure-input-2-3')) }}
  </div>

  <div class="pure-control-group">
    {{ Form::label('longitude', 'Longitude') }}
    {{ Form::text('longitude', null, array('class' => 'pure-input-2-3')) }}
  </div>

  <div class="pure-control-group">
    {{ Form::label('url', 'Site URL') }}
    {{ Form::text('url', null, array('class' => 'pure-input-2-3')) }}
  </div>

  <div class="pure-controls center">
    <button type="submit" class="pure-button button-success">Save {{ $mall->name }}</button>
  </div>
</fieldset>