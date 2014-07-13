<?php

class Mall extends \Eloquent {
	protected $fillable = [];

  public function stores()
  {
    return $this->hasMany('Store');
  }
}