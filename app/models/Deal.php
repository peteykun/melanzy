<?php

class Deal extends \Eloquent {
	protected $fillable = [];

  public function store()
  {
    return $this->belongsTo('Store');
  }

  public function photos()
  {
    return $this->morphMany('Photo', 'imageable');
  }
}