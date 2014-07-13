<?php

class Brand extends \Eloquent {
	protected $fillable = [];

  public function stores()
  {
    return $this->belongsToMany('Store');
  }
}