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
    {{ Form::label('shop_number', 'Shop Number') }}
    {{ Form::text('shop_number', null, array('class' => 'pure-input-2-3')) }}
  </div>

  <div class="pure-control-group">
    {{ Form::label('floor', 'Floor') }}
    {{ Form::text('floor', null, array('class' => 'pure-input-2-3')) }}
  </div>

  <div class="pure-control-group">
    {{ Form::label('mall_id', 'Mall') }}
    {{ Form::select('mall_id', Mall::lists('name', 'id'), null, array('class' => 'pure-input-2-3')) }}
  </div>

  <div class="pure-controls center">
    <button type="submit" class="pure-button button-success">Save {{ $store->name }}</button>
  </div>
</fieldset>