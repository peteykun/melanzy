<?php

class Store extends \Eloquent {
	protected $fillable = [];

  public function mall()
  {
    return $this->belongsTo('Mall');
  }

  public function brands()
  {
    return $this->belongsToMany('Brand');
  }

  public function deals()
  {
    return $this->hasMany('Deal');
  }

  public function photos()
  {
    return $this->morphMany('Photo', 'imageable');
  }
}