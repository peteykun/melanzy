<?php

class Photo extends \Eloquent {
  protected $fillable = [];

  public function imageable()
  {
    return $this->morphTo();
  }
}